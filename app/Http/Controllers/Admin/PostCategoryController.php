<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\PostCate;
use app\Http\Controllers\Controller;

class PostCategoryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageCategory()
    {
        $categories = PostCate::where('parent_id', '=', 0)->get();
        $allCategories = PostCate::pluck('title','id')->all();
        $router  = route('add.postCategory');
        $main = '';
        $page_show = '';
        return view('categoryTreeview',compact('router','page_show','categories','main','allCategories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCategory(Request $request)
    {
        $this->validate($request, [
        		'title' => 'required',
        	]);
        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        
        PostCate::create($input);
        return back()->with('success', 'New Category added successfully.');
    }


}
