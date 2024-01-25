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
            "code" => "4445645656"
        ],
        [
            "id" => 2,
            "code" => "4445645666"
        ],
        [
            "id" => 3,
            "code" => "4445645676"
        ],
    ];
    return view("welcome", compact("products"));
});
