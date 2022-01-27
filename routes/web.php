<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('welcome', ["name" => "Seph"]);
});

Route::get('/products', function () {
    return Inertia::render('Products/ui/index', ["name" => "Seph"]);
});

Route::get('/products/{id}', function () {
    return Inertia::render('Products/ui/index', ["name" => "Seph"]);
});

Route::get('/categories', function () {
    return Inertia::render('Category/ui/index', ["name" => "Seph"]);
});

Route::post("/logout", function(){
    dd("user logging out");
});
