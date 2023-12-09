<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Services\RequestService;
use App\Models\Keyval;
class KeyvalController extends TemplateController
{
    public string $main = 'keyval';

    function __construct(Request $request, Keyval $keyval, RequestService $requestService)
    {
        $this->entity = $keyval;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }
}

