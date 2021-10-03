<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Log;

class ProductService extends BaseService
{
    public function __construct(Product $model)
    {
        Parent::__construct($model);
        $this->fileStoragePath = "public/product-primary-photos";
    }

    public function validatePayload($id = null)
    {
        return [
            "code" => "required|max:30",
            "product_name" => "required"
        ];
    }
}
