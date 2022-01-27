<?php

namespace Database\Factories;


use Illuminate\Support\Str;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Group::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "uuid" => Str::random(20),
            "code" => Str::random(15),
            "group_name" => $this->faker->city . " group"
        ];
    }
}
