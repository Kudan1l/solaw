<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get("/", [HomeController::class,"index"])->name("home");
Route::get("/artikel", [HomeController::class,"articleMenu"])->name("article");
Route::get("/artikel/{id}", [HomeController::class,"showArticle"])->name("article.detail");