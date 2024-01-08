<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\ContactRepository;
use App\Models\PostCategory;
use App\Models\Post;
use App\Services\BaseService;

class PostController 
{
  protected $url;
  protected $post;
  protected $post_cates;
  protected $contactRepository;
  protected $baseService;

  public function __construct(
    BaseService $baseService,
    ContactRepository $contResp,
    Post $post,
    PostCategory $post_cates
  ) {
      $this->contactRepository = $contResp;
      $this->post = $post;
      $this->post_cates = $post_cates;
      $this->baseService = $baseService;
    }

    //DETAILS
    public function post_details($id,$parent_id=false)
    {
      $post = $this->post->find($id);
      $viewName = 'post'; 
      $data['viewName'] = $viewName;
      $data['post'] = $post;
      if($parent_id==false){
        $data['post_cates'] = $this->post_cates->where('parent_id',$post->category_id )->get();
      }else{
        $data['post_cates'] = $this->post_cates->where('parent_id',$parent_id )->get();
      }
      return view('frontend.post',$data);
    }

    public function posts()
    {
      $viewName = 'posts'; 
      $data['viewName'] = $viewName;
      $data['cates'] = $this->post_cates->where('level',1)->paginate(3);
      return view('frontend.posts',$data);
    }

    public function postCategoriesById($id)
    {
      $viewName = 'posts_cates'; // 例如 'pages.home'
      $data['viewName'] = $viewName;
      $data['prod_cates'] = $this->post_cates->where('parent_id',$id)->paginate(3);
      $cate = $this->post_cates->where('id',$id)->first();
      if(isset($cate->level) && $cate->level==3){
        $data['posts'] = $this->post->where('category_id',$id)->paginate(3);
      }  
      $data['pcates2'] = $this->post_cates->whereNotIn('id',[$cate->id])->where('level',$cate->level)->get();
      $data['cate'] = $cate;
      return view('frontend.posts2',$data);
    }
}
