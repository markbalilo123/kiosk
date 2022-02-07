<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "uuid" => Str::random(30),
            "emp_code" => Str::random(10),
           
            "first_name" => $this->faker->firstName,
            "middle_name" => $this->faker->lastName,
            "last_name" => $this->faker->lastName,
            "position" => $this->faker->jobTitle,
            "pin" => Str::random(4),
            "other_info" => $this->faker->text
        ];
    }
}
