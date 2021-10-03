<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $searchableColumns = ["code", "product_name"];

    public $defaultSortkey = "product_name";

    public $fileColumns = ["primary_photo"];

    protected $fillable = [
                "uuid",
                "code",
                "product_name",
                "short_name",
                "group_uuid",
                "category_uuid",
                "item_type",
                "min_stock",
                "tax_type",
                "sellable",
                "primary_photo"
            ];

}
