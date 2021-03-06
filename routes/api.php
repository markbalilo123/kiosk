<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\GroupController;

use App\Http\Controllers\API\EmployeeController;

use App\Http\Controllers\API\TerminalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("terminalServer", [TerminalController::class, "getServerTerminal"])->name("terminalServer.list");




Route::get("categories/{id}", [CategoryController::class, "get"])->name("category.get");
Route::post("categories", [CategoryController::class, "store"])->name("category.store");
Route::patch("categories/{id}", [CategoryController::class, "update"])->name("category.update");
Route::delete("categories/{id}", [CategoryController::class, "destroy"])->name("category.destroy");


Route::get("products", [ProductController::class, "all"])->name("product.list");
Route::get("products/{id}", [ProductController::class, "get"])->name("product.get");
Route::post("products", [ProductController::class, "store"])->name("product.store");
Route::patch("products/{id}", [ProductController::class, "update"])->name("product.update");
Route::delete("products/{id}", [ProductController::class, "destroy"])->name("product.destroy");


Route::get("groups", [GroupController::class, "all"])->name("group.list");
Route::get("groups/{id}", [GroupController::class, "get"])->name("group.get");
Route::post("groups", [GroupController::class, "store"])->name("group.store");
Route::patch("groups/{id}", [GroupController::class, "update"])->name("group.update");
Route::delete("groups/{id}", [GroupController::class, "destroy"])->name("group.destroy");


Route::get("categories", [CategoryController::class, "all"])->name("category.list");
Route::get("categories/{id}", [CategoryController::class, "get"])->name("category.get");
Route::post("categories", [CategoryController::class, "store"])->name("category.store");
Route::patch("categories/{id}", [CategoryController::class, "update"])->name("category.update");
Route::delete("categories/{id}", [CategoryController::class, "destroy"])->name("category.destroy");


Route::get("employees", [EmployeeController::class, "all"])->name("employees.list");
Route::get("employees/{id}", [EmployeeController::class, "get"])->name("employees.get");
Route::post("employees", [EmployeeController::class, "store"])->name("employees.store");
Route::patch("employees/{id}", [EmployeeController::class, "update"])->name("employees.update");
Route::delete("employees/{id}", [EmployeeController::class, "destroy"])->name("employees.destroy");

