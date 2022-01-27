<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\GroupService;


class GroupController extends Controller
{
    public function __construct(GroupService $service)
    {
        $this->modelService = $service;
        $this->modelAlias = " Group ";
    }
}
