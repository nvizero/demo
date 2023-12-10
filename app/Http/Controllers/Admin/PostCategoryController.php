<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AboutCategory;
use App\Services\RequestService;

class PostCategoryController extends TemplateController
{
    public string $main = 'post_cates';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct(Request $request, AboutCategory $aboutCategories, RequestService $requestService)
    {        
        $this->entity = $aboutCategories;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }
}
