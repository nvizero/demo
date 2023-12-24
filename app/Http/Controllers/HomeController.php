<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Services\BaseService;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Mail\OrderShipped;
use App\Repository\ContactRepository;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\UrlGenerator;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  protected $url;
  protected $prod;
  protected $prod_cates;
  protected $contactRepository;
  protected $baseService;

  public function __construct(
    BaseService $baseService,
    ContactRepository $contResp,
    UrlGenerator $url,
    Product $prod,
    Category $prod_cates
  ) {
      $this->contactRepository = $contResp;
      $this->url = $url;
      $this->prod = $prod;
      $this->prod_cates = $prod_cates;
      $this->baseService = $baseService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Product $prod)
    {
      $data['products'] = $prod->where('is_flag',1)->orderBy('sort','desc')->get();// '', ['sort', 'DESC'], 9);
      $data['hots'] = $prod->where('is_hot',1)->orderBy('sort','desc')->get();// '', ['sort', 'DESC'], 9);
      $data['index_shows'] = $this->baseService->getTableData('index_show', ['is_flag'=>1], '', ['sort', 'DESC'], 9);
      $data['index_about'] = $this->baseService->getTableData('index_about', ['is_flag'=>1], '', ['sort', 'DESC'], 9);
      $data['news'] = $this->baseService->getTableData('posts', ['is_flag'=>1], '', ['sort', 'DESC'], 9);
      return view('frontend.index',$data);
    }

    public function about($id)
    {
      $data['about'] = $this->baseService->find('abouts',  $id ,'*');
      return view('frontend.about',$data);
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
      $all  = ['msg'=>"victortest"];
      Mail::to("nvizero@yahoo.com.tw")->send(new OrderShipped($all));
      //$this->contactRepository->store($all);
      //return redirect()->back();
      echo "<script> alert('联系成功！');window.location.href = \"/\";</script>";
    }


    //圖片上傳 回傳 CREATE格式
    public function uploadimgs(Request $request)
    {
      $file = $request->file('files');
      if ($request->file('files')) {
        $str = Str::random(10);
        $imagePath = $file[0]->store("uploads/{$str}", 'public');
        $image = Image::make(public_path("storage/{$imagePath}"));
        $image->save(public_path("storage/{$imagePath}"), 60);
        $image->save();
      }
      $json['success'] = true;
      $json['elapsedTime'] = 0;
      $json['time'] = date('Y-m-d H:i:s');
      $json['data']['baseurl'] = $this->url->to('/') ;
      $json['data']['isImages'] = [true];
      $json['data']['files'] = ['/storage/'.$imagePath];
      $json['data']['code'] = 200;
      $json['data']['messages'] = ["/storage/" . $imagePath];
      return  json_encode($json);
    }
}
