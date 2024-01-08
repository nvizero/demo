<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Services\RequestService;
use App\Models\Getbform;

class GetbformController extends TemplateController
{
    public string $main = 'get_bforms';
    function __construct(Request $request, Getbform $bform, RequestService $requestService)
    {
        $this->entity = $bform;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }
}

