<?php

namespace Tests\Feature\Employee;

use Tests\TestCase;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\UploadFile;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmployeeTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    protected $user;

    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function setUp(): void
    {
        Parent::setUp();
        $this->setupFaker();
        $this->user = User::factory()->create();
    }

    public function testToGetListOfEmployees()
    {
        $employee = Employee::factory()->count(30)->create();
        $this->actingAs($this->user);
        $response = $this->withHeaders([
            'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
            'Accept' => 'application/json'
        ])
        ->get(route("employees.list"))
        ->assertStatus(200)
        ->assertJson(fn (AssertableJson $json) =>
            $json->has("data")
                ->has("links")
                ->has("meta")
                ->etc()
        );

    }

    public function testEmployeeSearch()
    {
        $employee = Employee::factory()->count(30)->create();
        $this->actingAs($this->user);
        $response = $this->withHeaders([
            'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
            'Accept' => 'application/json'
        ])
        ->get(route("employees.list", ["search" => $employee[0]->last_name]))
        ->assertStatus(200)
        ->assertJson(fn (AssertableJson $json) =>
            $json->has("data")
                ->has("links")
                ->has("meta")
                ->etc()
        );
    }

    public function testToCreateEmployee()
    {
        $payload = [
            "uuid" => Str::random(30),
            "emp_code" => Str::random(10),
           
            "first_name" => $this->faker->firstName,
            "middle_name" => $this->faker->lastName,
            "last_name" => $this->faker->lastName,
            "position" => $this->faker->jobTitle,
            "pin" => Str::random(4),
            "other_info" => $this->faker->text
        ];

        $this->actingAs($this->user);
        $response = $this->withHeaders([
            'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
            'Accept' => 'application/json'
        ])
        ->post(route("employees.store"), $payload)
        ->assertStatus(201)
        ->assertJson(fn (AssertableJson $json) => 
            $json->where("emp_code" ,$payload["emp_code"])
                ->where("last_name", $payload["last_name"])
                ->etc()
        );

    }

    public function testCreateEmployeeDuplicateData()
    {
        $payload = (array)Employee::factory()->create();
        $this->actingAs($this->user);
        $response = $this->withHeaders([
            'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
            'Accept' => 'application/json'
        ])
        ->post(route("employees.store"), $payload)
        ->assertStatus(422);
    }

    public function testCreateEmployeeMissingCodePayload()
    {
        $payload = [
            "last_name" => $this->faker->lastName
        ];
        $this->actingAs($this->user);
        $response = $this->withHeaders([
            'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
            'Accept' => 'application/json'
        ])
        ->post(route("employees.store"), $payload)
        ->assertStatus(422);
    }


  

    public function testCreateEmployeeMissingEmployeeNamePayload()
    {
        $payload = [
            "emp_code"  => Str::random(10)
           
        ];
        $this->actingAs($this->user);
        $response = $this->withHeaders([
            'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
            'Accept' => 'application/json'
        ])
        ->post(route("employees.store"), $payload)
        ->assertStatus(422);
    }

    

    public function testToGetEmployee()
    {
        $payload = Employee::factory()->create();
        $this->actingAs($this->user);
        $response = $this->withHeaders([
            'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
            'Accept' => 'application/json'
        ])
        ->get(route("employees.get", [ "id" => $payload["id"]]))
        ->assertStatus(200)
        ->assertJson(fn (AssertableJson $json) =>
            $json->where("emp_code", $payload["emp_code"])
                ->where("last_name", $payload["last_name"])
                ->etc()
        );
    }


    public function testToUpdateEmployee()
    {
        $employee = Employee::factory()->create();
        $payload = [
            "emp_code" => Str::random(10),
            "last_name" => $this->faker->lastName,
            "first_name" => $this->faker->lastName,
            "position" => $this->faker->jobTitle,
            "pin" => Str::random(4),
        ];
        $this->actingAs($this->user);
        $response = $this->withHeaders([
            'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
            'Accept' => 'application/json'
        ])
        ->patch(route("employees.update", [ "id" => $employee["id"]]), $payload)
        ->assertStatus(200)
        ->assertJson(fn (AssertableJson $json) =>
            $json->where("emp_code", $payload["emp_code"])
                ->where("last_name", $payload["last_name"])
                ->where("first_name", $payload["first_name"])
                
                ->where("pin", $payload["pin"])
                ->etc()
        );
    }


    public function testToUpdateInvalidEmployeeID()
    {
        $employee = Employee::factory()->create();
        $payload = [
            "emp_code" => Str::random(10),
            "last_name" => $this->faker->lastName,
            "first_name" => $this->faker->lastName,
            "position" => $this->faker->jobTitle,
            "pin" => Str::random(4),
        ];
        $this->actingAs($this->user);
        $response = $this->withHeaders([
            'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
            'Accept' => 'application/json'
        ])
        ->patch(route("employees.update", [ "id" => "12323"]), $payload)
        ->assertStatus(500);
        
    }


    public function testToDeleteEmployee()
    {
        $employee = Employee::factory()->create();

        $this->actingAs($this->user);
        $response = $this->withHeaders([
            'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
            'Accept' => 'application/json'
        ])
        ->delete(route("employees.destroy", [ "id" => $employee["id"]]))
        ->assertStatus(200);
       
       
    }

    public function testToDeleteInvalidIDofEmployee()
    {
        $employee = Employee::factory()->create();

        $this->actingAs($this->user);
        $response = $this->withHeaders([
            'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
            'Accept' => 'application/json'
        ])
        ->delete(route("employees.destroy", [ "id" => "123347"]))
        ->assertStatus(404);
       
       
    }

    
       
}
