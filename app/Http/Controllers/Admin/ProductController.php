<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Services\RequestService;
use App\Models\Product;
class ProductController extends TemplateController
{

    public string $main = 'products';

    function __construct(Request $request, Product $products, RequestService $requestService)
    {

        $this->entity = $products;
        $this->request = $request;
        $this->fieldsSetting = $this->entity->tableFieldsSetting();
        $this->requestService = $requestService;
    }
}

