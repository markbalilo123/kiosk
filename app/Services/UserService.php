<?php

namespace App\Services;

class UserService extends BaseService
{
    public function __construct(User $user)
    {
        $this->model = $user;
        $this->searchableColumns = $this->model->searchableColumns;
    }
}
