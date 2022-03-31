<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\TerminalController;
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
    return Inertia::render('welcome', ["name" => "home"]);
});

Route::as('terminal.')
    ->controller(TerminalController::class)
    ->group(function () {
        Route::get('/terminal', "getTerminal")->name("getTerminal");
});

Route::get('/maps', function () {
    return Inertia::render('maps', ["name" => "About us"]);
});

// Route::get('/routes', function () {
//     return Inertia::render('routes', ["name" => "Routes"]);
// });

Route::get('/contact-us', function () {
    return Inertia::render('contact-us', ["name" => "Contact us"]);
});

Route::get('/about-us', function () {
    return Inertia::render('about-us', ["name" => "About us"]);
});

Route::get('/faq', function () {
    return Inertia::render('faq', ["name" => "FAQ"]);
});
