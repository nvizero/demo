<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Services\RequestService;
use App\Models\Aform;
class AformController extends TemplateController
{
    public string $main = 'aforms';

    function __construct(Request $request, Aform $aform, RequestService $requestService)
    {
        $this->entity = $aform;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }
}

