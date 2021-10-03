<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\Log;

class CategoryService extends BaseService
{

    public function __construct(Category $model)
    {
        Parent::__construct($model);
    }

    public function validatePayload($id = null)
    {
        return [
            "code" => "required|max:6",
            "category_name" => "required"
        ];
    }
}
