<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Semic;
use App\Services\BaseService;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Mail\OrderShipped;
use App\Repository\ContactRepository;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct(
    Request $request,
    BaseService $baseService,
    Semic $semic,
    ContactRepository $contResp
  ) {
      $this->contactRepository = $contResp;
      $this->request = $request;
      $this->baseService = $baseService;
      $this->semic = $semic;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $data['semics'] = $this->baseService->getTableData('posts', ['show' => 1,'status'=>1], '', ['show_sort', 'DESC'], 9);
      return view('frontend.index',$data);
    }

    public function about()
    {
      return view('frontend.about');
    }

    public function aboutMe()
    {
      return view('frontend.aboutMe');
    }

    //聯絡我們
    public function cont()
    {
      return view('frontend.contact');
    }

    //聯絡我們
    public function handleContact(Request $request)
    {
              $this->validate($request, [
                  'captcha' => 'required|captcha',
              ],[
                  'captcha.required' => trans('validation.required'),
                  'captcha.captcha' => trans('validation.captcha'),
              ]);
      $all  = $this->request->all();
      Mail::to("sales@fumagnet.com")->send(new OrderShipped($all));
      $this->contactRepository->store($all);
      //return redirect()->back();
      echo "<script> alert('联系成功！');window.location.href = \"/\";</script>";
    }

    public function calc()
    {
      return view('frontend.calc');
    }

    //半導體
    public function products($id)
    {
      $data['semic_cates'] = $this->baseService->getTableData('semic_cates', ['semic_main_id'=>$id]);
      return view('frontend.products', $data);
    }

  public function productsIn()
  {
    $main_id =$this->request->input('main_id');
    $cate_id =$this->request->input('cate_id');
    $sql2  = "select * from semic_mains  where id = ".$main_id;
    $cmain = $this->baseService->raw($sql2);
    if(!empty($cate_id)){
      $semicCates = $this->baseService->getTableData('semic_mains',['id'=>$cate_id]);
    }
    $sql  = "select * from semic_mains order by sort desc ";
    $bars = $this->baseService->raw($sql);
    $data['bars'] =$bars;
    $data['main_id'] = $main_id;
    $data['catmain'] = $cmain[0];
    $data['semicCates'] = isset($semicCates)?$semicCates:$bars ;
    $cids = array();
    foreach($data['semicCates'] as $cate){
      $cids[$cate->id] = $cate->id;
    }
    $data['semics'] = $this->baseService->getTableData('semics', ['status'=>1,'semicCate_id'=>$main_id], "",['sort','DESC']);
    return view('frontend.products-in', $data);
  }


    public function productsDetail($id)
    {
      $semics = $this->baseService->find('semics', $id);
      $data['semics'] = $semics;
      $data['id'] = $id;
      $data['semicCate'] = $this->baseService->find('semic_mains', $semics->semicCate_id);
      $data['semicCates'] = $this->baseService->getTableData('semics', ['semicCate_id' => $semics->semicCate_id]);
      return view('frontend.products-detail', $data);
    }

    //除鐵器
    public function servicesCate()
    {
      $data['ironCates'] = $this->baseService->getTableData('irons', '');
      return view('frontend.services', $data);
    }

    public function servicesIn($id)
    {
      $iron = $this->baseService->find('irons', $id);
      $data['iron'] = $iron;
      $data['irons'] = $this->baseService->getTableData('irons', '');
      return view('frontend.services-in', $data);
    }

    public function getSems()
    {
      $val = $this->request->input('val');
      if (!empty($val)) {
        $vals = explode('_', $val);
        $sql = 'select * from  semics where `semicCate_id` in(' . implode(',', array_filter($vals)) . ') ';
        $datas = $this->baseService->raw($sql);
        return response()->view('backend.components.checkboxs',  compact('datas'));
        } else {
          return false;
        }
    }
    //圖片上傳 回傳 CREATE格式
    public function uploadimgs()
    {
      $file = $this->request->file('files');
      if ($this->request->file('files')) {
        $str = Str::random(10);
        $imagePath = $file[0]->store("uploads/{$str}", 'public');
        $image = Image::make(public_path("storage/{$imagePath}"));
        $image->save(public_path("storage/{$imagePath}"), 60);
        $image->save();
        }
        $json['success'] = true;
        $json['elapsedTime'] = 0;
        $json['time'] = date('Y-m-d H:i:s');
        $json['data']['baseurl'] = env('APP_URL') ;
        $json['data']['isImages'] = [true];
        $json['data']['files'] = ['storage/'.$imagePath];
        $json['data']['code'] = 200;
        $json['data']['messages'] = ["/storage/" . $imagePath];
        return  json_encode($json);
    }
}
