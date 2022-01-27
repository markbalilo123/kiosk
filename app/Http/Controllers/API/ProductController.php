<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\ProductService;

class ProductController extends Controller
{
    //
    public function __construct(ProductService $service)
    {
        $this->modelService = $service;
        $this->modelAlias = "Product";
    }
}
