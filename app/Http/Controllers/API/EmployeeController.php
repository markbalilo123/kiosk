<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\EmployeeService;


class EmployeeController extends Controller
{
    public function __construct(EmployeeService $service)
    {
        $this->modelService = $service;
        $this->modelAlias = " Employee ";
    }
}
