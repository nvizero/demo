<?php
namespace App\Http\Controllers\Admin;

use App\Services\RequestService;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends TemplateController
{
    public string $main = 'categories';
    function __construct(Request $request, Category $categories, RequestService $requestService)
    {
        $this->entity = $categories;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageCategory()
    {
        $categories = Category::where('parent_id', '=', 0)->get();
        $allCategories = Category::pluck('title','id')->all();
        $router  = 'category';
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
        
        Category::create($input);
        return back()->with('success', 'New Category added successfully.');
    }

}
