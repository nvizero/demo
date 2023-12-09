<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Services\RequestService;
use App\Models\IndexShow;
class IndexShowController extends TemplateController
{
    public string $main = 'index_show';

    function __construct(Request $request, IndexShow $indexShow, RequestService $requestService)
    {

        $this->entity = $indexShow;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }
}

