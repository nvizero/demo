<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Category;
use App\Models\PagePhoto;
use App\Models\PostCategory;
use App\Models\About;
use App\Models\AboutCategory;

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
      $viewName = 'index'; 
      $data['viewName'] = $viewName;
      $data['products'] = $prod->where('is_flag',1)->orderBy('sort','desc')->get();// '', ['sort', 'DESC'], 9);
      $data['hots'] = $prod->where('is_hot',1)->orderBy('sort','desc')->get();// '', ['sort', 'DESC'], 9);
      $data['index_shows'] = $this->baseService->getTableData('index_show', ['is_flag'=>1], '', ['sort', 'DESC'], 9);
      $data['index_about'] = $this->baseService->getTableData('index_about', ['is_flag'=>1], '', ['sort', 'DESC'], 9);
      $data['news'] = $this->baseService->getTableData('posts', ['is_flag'=>1], '', ['sort', 'DESC'], 9);
      return view('frontend.index',$data);
    }
  
    public function hashtag($tag)
    {
      $viewName = 'hashtags'; 
      $data['viewName'] = $viewName;
      Tag::where('name',$tag)->increment("count");
      $data['products'] = $this->baseService->searchData('products',["tags","like","%$tag%"] ,'*' , ['id','desc']);
      $data['posts'] = $this->baseService->searchData('posts',["tags","like","%$tag%"] ,'*' , ['id','desc']);
      $data['htags'] = Tag::orderBy('count',"desc")->limit(5)->get();
      $data['hashTag'] = $tag;
      return view('frontend.hashtags',$data);
    }

    public function abouts($cate_id, About $about, AboutCategory $cate)
    {
      $viewName = 'abouts'; 
      $data['viewName'] = $viewName;
      $data['abouts'] = $about->where('about_category_id',$cate_id)->paginate(3);
      $data['cate'] = $cate->find($cate_id);
      $data['cates'] = $cate->where('able',1)->whereNotIn('id',[$cate_id])->get();

      return view('frontend.abouts',$data);
    }
    

    public function about($id)
    {
      $viewName = 'abou'; 
      $data['viewName'] = $viewName;
      $data['about'] = $this->baseService->find('abouts',  $id ,'*');
      return view('frontend.about',$data);
    }

    public function aboutMe()
    {
      return view('frontend.aboutMe');
    }

    //聯絡我們
    public function contact()
    {
      $viewName = 'contact'; 
      $data['viewName'] = $viewName;
      return view('frontend.contact',$data);
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

    public function ipageimg(){

      $viewspath = resource_path('views/frontend'); // 獲取 views 目錄的路徑
      $files = file::allfiles($viewspath); // 獲取該目錄下的所有文件

      $filenames = [];
      foreach ($files as $file) {
          $filename = $file->getfilename();
          $filename = str_replace('.blade.php', '', $filename); // 移除 .blade.php
          $filenames[] = $filename;
      }      
      // 需要移除的元素
      $removeItems = ['modal', 'index', 'navbar', 'footer'];
      // 使用 array_filter 移除指定元素
      $filteredFilenames = array_filter($filenames, function($filename) use ($removeItems) {
          return !in_array($filename, $removeItems);
      });
      // 重设数组索引
      $filteredFilenames = array_values($filteredFilenames);
      foreach($filteredFilenames as $name){
        try{
          PagePhoto::create(['name'=>$name ,'key'=>$name ,'img'=>'/lu/images/banner/81438612_p0.png']);
        }catch(\Exception $e){
          
        }
      }

    }
}
