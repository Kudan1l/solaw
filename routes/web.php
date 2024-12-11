<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('index');
// })->name('home');

Route::get("/", [HomeController::class,"index"])->name("home");
