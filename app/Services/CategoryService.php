<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\CategoryRequest;

class CategoryService extends BaseService
{

    public function __construct(Category $model)
    {
        parent::__construct($model);

		//		variable to hold array ->  this columns is declared on model
		$this->searchableColumns = $this->model->getFillable();
		// if nothing declare on model it will get error
		$this->defaultSortKey =  ["code", "category_name"] ;

		//instantiate a variable to call in base controller $this->modelService->requestValidator then call the methods of request class
		$this->requestValidator = new CategoryRequest;

        $this->modelResource = "App\Http\Resources\CategoryResource";

        //location to upload
        $this->fileStoragePath = "public/category";
    }

}
