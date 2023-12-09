<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Services\RequestService;
use App\Models\IndexAbout;
class IndexAboutController extends TemplateController
{

    public string $main = 'index_about';

    function __construct(Request $request, IndexAbout $indexAbout, RequestService $requestService)
    {

        $this->entity = $indexAbout;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }
}

