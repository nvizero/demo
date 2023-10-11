<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Operate;
use App\Services\RequestService;
class OperateController extends TemplateController
{
    public string $main = 'operates';    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct(Request $request, Operate $operates, RequestService $requestService)
    {        
        $this->entity = $operates;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }
}
