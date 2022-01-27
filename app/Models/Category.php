<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["uuid", "code", "category_name"];

    public function products()
    {
        return $this->hasMany(Product::class, "category_uuid", "uuid");
    }
}
