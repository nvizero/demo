<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Services\RequestService;
use App\Models\PagePhoto;

class PagePhotoController extends TemplateController
{
    public string $main = 'page_photos';

    function __construct(Request $request, PagePhoto $pagePhoto, RequestService $requestService)
    {
        $this->entity = $pagePhoto;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }
}

