<?php

namespace App\Services;

use App\Models\Employee;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\EmployeeRequest;

class EmployeeService extends BaseService
{

    public function __construct(Employee $model)
    {
        parent::__construct($model);

		//		variable to hold array ->  this columns is declared on model
		$this->searchableColumns = $this->model->getFillable();
		// if nothing declare on model it will get error
		$this->defaultSortKey =  ["first_name", "middle_name", "last_name"] ;

		//instantiate a variable to call in base controller $this->modelService->requestValidator then call the methods of request class
		$this->requestValidator = new EmployeeRequest;

        $this->modelResource = "App\Http\Resources\EmployeeResource";

        //location to upload
        $this->fileStoragePath = "public/employee";
    }

}
