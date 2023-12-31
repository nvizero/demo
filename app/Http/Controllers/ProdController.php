<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\ContactRepository;
use App\Models\Category;
use App\Models\Getform;
use App\Models\Product;
use App\Services\BaseService;


class ProdController 
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
    Product $prod,
    Category $prod_cates
  ) {
      $this->contactRepository = $contResp;
      $this->prod = $prod;
      $this->prod_cates = $prod_cates;
      $this->baseService = $baseService;
    }

    //DETAILS
    public function details($id,$parent_id)
    {
      $prod = $this->prod->find($id);
      $data['prod'] = $prod;
      $data['prod_cates'] = $this->prod_cates->where('parent_id',$parent_id )->get();
      return view('frontend.details',$data);
    }

    public function products(Request $request)
    {
      $data['cates'] = $this->prod_cates->where('level',1)->paginate(3);
      return view('frontend.products',$data);
    }

    public function prodCategoriesById($id)
    {
      $data['prod_cates'] = $this->prod_cates->where('parent_id',$id)->paginate(3);
      $cate = $this->prod_cates->where('id',$id)->first();
      if(isset($cate->level)&& $cate->level==3){
        $data['prods'] = $this->prod->where('category_id',$id)->get();
      }  
      $data['pcates2'] = $this->prod_cates->whereNotIn('id',[$cate->id])->where('level',$cate->level)->get();
      $data['cate'] = $cate;
      return view('frontend.prod_cates',$data);
    }
    
    //動態表單
    public function prod_aform(Request $request){
      $input = [];
      foreach($request->all() as $key => $data ){
        
        if($key != "_token"){
          if(is_array($data)){
            $input[$key]=implode(",",$data);
          }else{
            $input[$key]= "$data";
          }
        }
      }
      $input['created_at'] = date("Y-m-d H:i:s");
      $input['updated_at'] = date("Y-m-d H:i:s");
      $this->baseService->storeDatabyM('getform' ,$input);
      return redirect()->back() 
          ->with('success', "提交成功！");
    }


    public function prodCategoriesByLevel($level)
    {
      $data['products'] = $this->prod_cates->where('is_flag',1)->orderBy('sort','desc')->get();// '', ['sort', 'DESC'], 9);
      // return view('frontend.aboutMe');
    }
}
