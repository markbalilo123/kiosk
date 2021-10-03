<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $searchableColumns = ["code", "category_name"];
    public $defaultSortkey = "category_name";

    protected $fillable = ["uuid", "code", "category_name"];
}
