<?php

namespace App\Services;

use App\Models\Group;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\GroupRequest;

class GroupService extends BaseService
{

    public function __construct(Group $model)
    {
        parent::__construct($model);

		//		variable to hold array ->  this columns is declared on model
		$this->searchableColumns = $this->model->getFillable();
		// if nothing declare on model it will get error
		$this->defaultSortKey =  "group_name" ;

		//instantiate a variable to call in base controller $this->modelService->requestValidator then call the methods of request class
		$this->requestValidator = new GroupRequest;

        $this->modelResource = "App\Http\Resources\GroupResource";

        //location to upload
        $this->fileStoragePath = "public/group";
    }

}
