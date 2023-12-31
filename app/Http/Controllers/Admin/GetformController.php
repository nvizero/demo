<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Services\RequestService;
use App\Models\Getform;

class GetformController extends TemplateController
{
    public string $main = 'getform';
    function __construct(Request $request, Getform $aform, RequestService $requestService)
    {
        $this->entity = $aform;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }
}

