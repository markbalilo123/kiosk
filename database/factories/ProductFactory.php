<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Group;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $group = Group::factory()->create();
        $category = Category::factory()->create();

        $itemTypes = ["simple", "composite", "bundle"];

        return [
            "uuid"      => Str::random(20),
            "code"      => $this->faker->isbn13,
            "product_name" => $this->faker->streetName,
            "short_name"   =>$this->faker->city,
            "group_uuid"    => $group->uuid,
            "category_uuid" => $category->uuid,
            "item_type"     => $itemTypes[rand(0,2)],
            "tax_type"      => "VAT",
            "sellable"      => true,
            "min_stock"     => rand(20, 200)
        ];
    }
}
