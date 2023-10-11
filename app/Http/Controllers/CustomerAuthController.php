<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Customer;
use App\Models\CustomerCollect;
use App\Models\Business;
use App\Services\CustomerService;
use App\Services\BaseService;
use App\Services\BusinessTagService;
use App\Services\BusinessService;
use App\Services\BusinessDesignService;
use Carbon\Carbon;
use App\Services\RequestService;
use App\Http\Controllers\Admin\TemplateController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use DB;
use App\Mail\OrderShipped;
use App\Mail\ForgotPwd;
use Illuminate\Support\Facades\Mail;


class CustomerAuthController extends Controller
{
    function __construct(
        Request $request,
        CustomerService $customerService,
        BaseService $baseService,
        RequestService $requestService,
        BusinessTagService $businessTagService,
        BusinessService $businessService,
        BusinessDesignService $businessDesignService
    ) {
        $this->businessTagService = $businessTagService;
        $this->customerService = $customerService;
        $this->request = $request;
        $this->baseService = $baseService;
        $this->requestService = $requestService;
        $this->businessService = $businessService;
        $this->businessDesignService = $businessDesignService;
    }
    //我发布的业务
    public function index()
    {
        $page = 6;
        $customerId = auth('webcustomer')->id();
        $sort = $this->request->input('sort');
        $datas['sort'] = '';
        $where = ['customer_id' => $customerId, 'status' => 1, 'status' => 0];
        if ($sort) {
            $datas['sort'] = $sort;
            if($sort=='collect'){
                $toSort = ['collect', 'desc'];
            }else{
                $toSort = ['created_at', $sort];
            }
            
            $datas['businesses'] = $this->baseService->getTableData('businesses', $where, '', $toSort, $page);
        } else {
            $datas['businesses'] = $this->baseService->getTableData('businesses', $where, '',  '', $page);
        }
        Customer::findOrFail($customerId);
        return view('frontend.user', $datas);
    }
    //我发布的业务
    public function busDetail($id)
    {
        $data['imgs'] = $this->businessService->getImgs($id);

        $market = $this->baseService->find('businesses', $id);
        $designData = $this->businessDesignService->get($market->business_design_id);
        $htmlTags = ['text', 'radio', 'checkbox'];
        foreach ($htmlTags as $tag) {
            $fieldName = "{$tag}_attr";
            if (!empty($market->$fieldName)) {
                $data["{$tag}Attrs"] = $this->businessService->htmlAttribs($designData, $market->$fieldName, $tag);
            } else {
                $data["{$tag}Attrs"] = null;
            }
        }
        $this->info();
        $data['market'] = $market;
        $data['isCollected'] = false;
        if ($customer = auth('webcustomer')->user()) {
            $collected = CustomerCollect::where('customer_id', $customer->id)
                ->where('business_id', $market->id)
                ->value('id');

            $data['isCollected'] = !!$collected;
        }

        return view('frontend.busDetail', $data);
    }


    public function info()
    {
        $method   = request()->method();
        $user     = auth('webcustomer')->user();
        $customer = Customer::findOrFail($user->id);

        if ('GET' === $method) {
            return view('frontend.user-info', ['name' => $customer->name]);
        }

        if ('PUT' === $method) {

            request()->validate([
                'name' => [Rule::unique('customers')->ignore($user->id)],
                'avatar' => 'file|max:1000|mimes:jpeg,bmp,png'
            ]);

            $result = [
                'success' => true
            ];

            if ($name = request()->input('name')) {
                $customer->name = $name;
                $result['name'] = $name;
            }

            if (request()->hasFile('avatar')) {
                if ($user->avatar) {
                    $path = request()->file('avatar')->storeAs('/avatars', basename($user->avatar), 'public');
                } else {
                    $path = request()->file('avatar')->store('/avatars', 'public');
                }
                $customer->avatar = $path;
            }
            $customer->save();

            return view('frontend.user-info', $result);
        }
    }
    //EMAIL驗證
    public function verify_user()
    {
        $scert = $this->request->get('scert');
        $key = $this->request->get('key');
        $customers = Customer::where('salt', $scert)->get();
        foreach ($customers as $customer) {
            $md5 = md5($customer->salt . $customer->id);
            if ($key == $md5) {
                $customer->verify = 1;
                $customer->save();
                echo "<script> alert('验证成功!');window.location.href = \"/\";</script>";
                Auth::guard('webcustomer')->login($customer);
            }
        }
        echo "<script> alert('验证失敗!');window.location.href = \"/\";</script>";
    }
    //忘記密碼 
    public function forgot()
    {
        return view('frontend.forgot');
    }

    
    public function collect()
    {
        $user = auth('webcustomer')->user();
        $method = request()->method();

        if ('POST' === $method) {
            request()->validate([
                'businessId' => 'required'
            ]);

            $businessId = request()->input('businessId');

            if (!$user) {
                return ['success' => false];
            }

            CustomerCollect::insert([
                'customer_id' => $user->id,
                'business_id' => $businessId,
                'created_at' => Carbon::now()->toDateTimeString()
            ]);
            //收藏+1
            $this->baseService->accumulate('businesses', $businessId, 'collect');
            return ['success' => true ];
        }

        if ('DELETE' === $method) {
            request()->validate([
                'businessId' => 'required'
            ]);

            $businessId = request()->input('businessId');

            if (!$user) {
                return ['success' => false];
            }

            CustomerCollect::where([
                'customer_id' => $user->id,
                'business_id' => $businessId,
            ])->delete();
            //收藏 -1
            $this->baseService->reduce('businesses', $businessId, 'collect');
            return ['success' => true];
        }

        $collects = CustomerCollect::with(['business'])
            ->where([
                'customer_id' => $user->id,
            ])->paginate(5);

        return view('frontend.user-collect', compact('collects'));
    }

    public function password()
    {
        $method = request()->method();

        if ('GET' === $method) {
            return view('frontend.user-pwd');
        }

        if ('PUT' === $method) {
            request()->validate([
                'password-current' => 'required',
                'password' => 'required|confirmed'
            ], [
                'password-current.required' => '请输入当前密码',
                'password.required' => __('default.required.password'),
                'password.confirmed' => '新密码和确认密码必须一致',
            ]);

            $form = request()->input();
            $user = auth('webcustomer')->user();

            $credentials = [
                'email' => $user->email,
                'password' => $form['password-current'],
            ];

            if (!Auth::guard('webcustomer')->attempt($credentials)) {
                return back()->withErrors(['当前密码输入错误']);
            }

            $customer = Customer::find($user->id);
            $customer->password = customerPwd($form['password'], $user->salt);
            $customer->save();

            return back()->with(['success' => true]);
        }
    }

    public function login()
    {
        return view('customer.login');
    }

    public function handleLogin(Request $req)
    {
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => __("default.email"),
                'password.required' => __("default.password")
            ]
        );

        $value = request()->input('email');
        $fieldType = filter_var($value, FILTER_VALIDATE_EMAIL) ? 'email' : 'account';

        // if (!Customer::where($fieldType, $value)->first()) {
        //     $errMsg = ($fieldType === 'email' ? 'email' : '用户名') . ' 不存在';

        //     return back()->withInput(['email'])->withErrors([$errMsg]);
        // }

        $attempt = [
            $fieldType => $value,
            'password' => request()->input('password')
        ];

        //登入成功        
        if (Auth::guard('webcustomer')->attempt($attempt)) {
            if (Auth::guard('webcustomer')->user()->verify != 1) {
                Auth::guard('webcustomer')->logout();
                return redirect()->back()->with('error', '验证未通过!请查看你的Email');
            }
            return redirect()->route('index');
        }

        return back()->withInput()->withErrors(['用户名邮箱或密码错误']);
    }

    public function doLogin($loginData)
    {
        if (Auth::guard('webcustomer')->attempt($loginData)) {
            return redirect()->route('index');
        } else {
            return redirect()->route('/signup');
        }
    }

    public function logout()
    {
        Auth::guard('webcustomer')->logout();
        return redirect()->route('customer.login');
    }

    public function signup()
    {
        return view('customer.signup');
    }
    //createStep1發佈業務
    public function createStep1()
    {
        $datas['contactTypes'] = ['Telegram', 'Skype', '土豆', '蝙蝠', 'Google', '邮箱'];
        $datas['tags'] = $this->businessTagService->getAll();
        return view('frontend.create-step1', $datas);
    }

    //要存二次
    public function customerBusinessStore($model)
    {
        $temp = new TemplateController();
        $entity =  new \App\Models\Business();
        return $temp->preDBPress($model->tableFieldsSetting(), $this->request, $entity, 'businesses');
    }

    //createStep1發佈業務
    public function postStep2()
    {
        $model = new Business();
        $obj = self::customerBusinessStore($model);
        $category_1 = 'business_category_1_id';
        $design = 'business_design_id';
        $datas['fields']['category_1'] = $category_1;
        $datas['fields']['design'] = $design;
        $datas['setting'] = $model->tableFieldsSetting();
        return redirect()->route('create-step2', ['id' => $obj->id]);
    }
    //createStep1發佈業務
    public function createStep2(int $id)
    {
        $model = new Business();
        $category_1 = 'business_category_1_id';
        $design = 'business_design_id';
        $datas['fields']['category_1'] = $category_1;
        $datas['fields']['design'] = $design;
        $datas['setting'] = $model->tableFieldsSetting();
        $datas['businesses'] = $this->baseService->find('businesses', $id);
        $datas['business_categories'] = $this->baseService->getTableData('business_categories', ['parent_id' => 1], '',  '', 99);
        $datas['areas'] = $this->baseService->getTableData('areas', ['able' => 1], '',  '', 99);
        $datas['industries'] = $this->baseService->getTableData('industries', ['able' => 1], '',  '', 99);
        return view('frontend.create-step2', $datas);
    }

    //createStep1發佈業務
    public function postStep3()
    {
        request()->validate(
             [
                 'industry_id' => 'required|numeric|min:0|not_in:0',
                 'business_design_id' => 'required',
                //  'account' => 'required|unique:customers,account|alpha_num|between:4,255',
            ],
            [
                 'industry_id.required|not_in:0' => "industry_id 必填11122",
                 'industry_id.not_in:0' => "industry_id 123123123 必填",                 
        //         'password.required' => __("default.required.password"),
                 'business_design_id.required' => '业务条件 必填',
        //         'account.alpha_num' => '用户名只能使用字母或数字',
        //         'account.between' => '用户名长度不少于4个字符',
        //         'email.unique' => '该邮箱已被注册',
        //         'email.email' => '请输入正确的邮箱格式',
        //         'password.between' => '密码长度不少于6个字符',
             ]
        );
        $model = new Business();
        self::customerBusinessStore($model);
        return redirect()->route('create-step3');
    }

    //createStep3發佈業務
    public function createStep3()
    {
        return view('frontend.create-step3');
    }

    public function vaildate()
    {
        $data['details']['account'] = 'account';
        $data['details']['key'] = 'key';
        $data['details']['email'] = 'email';
        $data['details']['scert'] = 'scert';
        $data['details']['name'] = 'name11';
        return view('frontend.vaildate', $data);
    }

    public function handleForgot()
    {
        $email = $this->request->input('email');
        $row = $this->baseService->getTableData('customers', ['email' => $email]);
        if (!isset($row[0])) {
            echo "<script> alert('没有此邮件,请联络管理员.');window.location.href = \"/\";</script>";
        }
        $details = [
            'scert' => trim($row[0]->salt),
            'key' => md5(trim($row[0]->salt) . ($row[0]->id))
        ];
        Mail::to($email)->send(new ForgotPwd($details));
        echo "<script> alert('发送成功！请收看收信箱.');window.location.href = \"/\";</script>";
    }
    //重設密碼 
    public function resetpwd()
    {
        $data["scert"] = $this->request->get('scert');
        $data["key"] = $this->request->get('key');
        $customer = $this->baseService->getTableData('customers', ['salt' => $this->request->get('scert')]);
        if (isset($customer[0])) {
            return view('frontend.resetpwd', $data);
        }
        echo "<script> alert('輪入錯誤.');window.location.href = \"/\";</script>";
    }

    public function handleReSetPwd()
    {
        $key = $this->request->input('key');
        $scert = $this->request->input('scert');
        $password = $this->request->input('password');
        $repassword = $this->request->input('repassword');
        $row = $this->baseService->getTableData('customers', ['salt' => $scert]);

        if (isset($row[0])) {
            $md5 = md5($row[0]->salt . $row[0]->id) == $key;
            if ($password == $repassword && $row && $md5) {
                $res = $this->customerService->resetPwd($row[0]->id, $password);
                if ($res) {
                    echo "<script> alert('修改密码成功！请重新登入');window.location.href = \"/customer/login\";</script>";
                } else {
                    echo "<script> alert('更新失败.');window.location.href = \"/\";</script>";
                }
            }
            echo "<script> alert('输入密码不一至.');window.location.href = \"/\";</script>";
        }
        echo "alert('更新失败.');window.location.href = \"/\";</script>";
    }

    public function forgotPwd()
    {
        $data['details']['account'] = 'account';
        $data['details']['key'] = 'key';
        $data['details']['email'] = 'email';
        $data['details']['scert'] = 'scert';
        $data['details']['name'] = 'name11';
        // 
        return view('frontend.forgotPwd', $data);
    }

    //delete 業務
    public function delCustomeCus()
    {
        $id = $this->request->input('id', false);
        if ($id) {
            $state = $this->baseService->update('businesses', $id, ['status' => 9]);
            if ($state) {
                return 1;
            } else {
                return false;
            }
        } else {
            return '';
        }
    }

    //delete 收藏
    public function cancelCollect()
    {
        $id = $this->request->input('id', false);
        $customerId = Auth::guard('webcustomer')->user()->id;
        if ($id && $customerId) {
            $state = $this->baseService->delete('customer_collects', ['customer_id' => $customerId ,'business_id'=>$id]);
            if ($state) {
                return 1;
            } else {
                return false;
            }
        } else {
            return '';
        }
    }

    public function handleSignup()
    {
        request()->validate(
            [
                'email' => 'required|email|unique:customers,email',
                'password' => 'required|between:6,255',
                'account' => 'required|unique:customers,account|alpha_num|between:4,255',
            ],
            [
                'email.required' => __("default.required.email"),
                'name.required' => __("default.required.name"),
                'password.required' => __("default.required.password"),
                'account.unique' => '该用户名已被注册',
                'account.alpha_num' => '用户名只能使用字母或数字',
                'account.between' => '用户名长度不少于4个字符',
                'email.unique' => '该邮箱已被注册',
                'email.email' => '请输入正确的邮箱格式',
                'password.between' => '密码长度不少于6个字符',
            ]
        );
        $all = $this->request->all();
        $order = $this->customerService->saveData($all);
        if (!$order) {
            return false;
        }
        $loginData = $this->request->only(['email', 'password']);
        $details = [
            'account' => $all['account'],
            'email' => $all['email'],
            'scert' => trim($order->salt),
            'key' => md5(trim($order->salt) . ($order->id))
        ];

        Mail::to($order->email)->send(new OrderShipped($details));
        return redirect()->route('send-success');
        // return $this->doLogin($loginData);
    }
}
