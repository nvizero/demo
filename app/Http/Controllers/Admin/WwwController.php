<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Services\RequestService;
use App\Models\Www;
class WwwController extends TemplateController
{

    public string $main = 'www';

    function __construct(Request $request, Www $www, RequestService $requestService)
    {

        $this->entity = $www;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }
}

