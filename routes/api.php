<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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


Route::get("categories", [CategoryController::class, "all"])->name("category.list");
Route::post("categories", [CategoryController::class, "store"])->name("category.store");


Route::get("products", [ProductController::class, "all"])->name("product.list");
Route::post("products", [ProductController::class, "store"])->name("product.store");
