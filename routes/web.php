<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Login;

Route::get("/", [HomeController::class,"index"])->name("home");
Route::get("/artikel", [HomeController::class,"articleMenu"])->name("article");
Route::get("/artikel/{id}", [HomeController::class,"showArticle"])->name("article.detail");

Route::get('/login', [Login::class, 'index'])->name('login');
Route::post('/loginPost', [Login::class, 'login'])->name('loginPost');

Route::get('/forgotpass', [Login::class, 'forgotview'])->name('forgotview');
Route::post('/forgotpass', [Login::class, 'update'])->name('forgotupdate');

Route::get('/signup', [Login::class, 'signUpView'])->name('signupview');
// Route::post('/signup', [Login::class, 'save'])->name('signupupdate');

Route::post('/user/save', [Login::class, 'signUpPost'])->name('signUpPost');
