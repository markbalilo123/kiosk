<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{

    public function __construct(CategoryService $service)
    {
        $this->modelService = $service;
        $this->modelAlias = " Category ";
    }

}
