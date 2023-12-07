<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Services\RequestService;
use App\Models\About;
class AboutController extends TemplateController
{

    public string $main = 'abouts';

    function __construct(Request $request, About $abouts, RequestService $requestService)
    {

        $this->entity = $abouts;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }
}

