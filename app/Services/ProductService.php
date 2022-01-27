<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\ProductRequest;

class ProductService extends BaseService
{
    public function __construct(Product $model)
    {
        Parent::__construct($model);
        //		variable to hold array ->  this columns is declared on model
		$this->searchableColumns = array_merge($this->model->getFillable(), ["group.group_name", "category.category_name"]);
		// if nothing declare on model it will get error
		$this->defaultSortKey =  ["product_name"] ;

		//instantiate a variable to call in base controller $this->modelService->requestValidator then call the methods of request class
		$this->requestValidator = new ProductRequest;

        $this->modelResource = "App\Http\Resources\ProductResource";

        //location to upload
        $this->fileStoragePath = "public/products";
    }

}
