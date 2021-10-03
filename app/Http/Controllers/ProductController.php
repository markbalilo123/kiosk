<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    public function __construct(ProductService $service)
    {
        $this->modelService = $service;
        $this->modelAlias = " Product ";
    }
}
