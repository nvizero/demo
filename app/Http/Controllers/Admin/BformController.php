<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Services\RequestService;
use App\Models\Bform;
class BformController extends TemplateController
{
    public string $main = 'bforms';

    function __construct(Request $request, Bform $bform, RequestService $requestService)
    {
        $this->entity = $bform;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }
}

