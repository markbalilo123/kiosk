<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    public function __construct(CategoryService $service)
    {
        $this->modelService = $service;
        $this->modelAlias = " Category ";
    }
}
