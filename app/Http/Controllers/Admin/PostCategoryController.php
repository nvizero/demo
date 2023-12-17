<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PostCategory;
use App\Services\RequestService;

class PostCategoryController extends TemplateController
{
    public string $main = 'post_cates';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct(Request $request, PostCategory $postCategories, RequestService $requestService)
    {        
        $this->entity = $postCategories;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }
}
