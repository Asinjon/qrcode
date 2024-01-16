<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $products = [
        [
            "id" => 1,
            "name" => "Product 1"
        ],
        [
            "id" => 2,
            "name" => "Product 2"
        ],
        [
            "id" => 3,
            "name" => "Product 3"
        ],
    ];
    return view("welcome", compact("products"));
});
