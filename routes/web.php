<?php

use App\Http\Controllers\DocumentController;
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


// route pembuatan dokumen
Route::get('/PEMBUATANDOKUM', [DocumentController::class, 'PEMBUATANDOKUM'])->name('PEMBUATANDOKUM');

Route::get('/PEMBUATANDOKUM/Gugatan', [DocumentController::class, 'Gugatan'])->name('gugatan');

Route::get('/PEMBUATANDOKUM/Kontrak', [DocumentController::class, 'Kontrak'])->name('kontrak');

Route::get('/PEMBUATANDOKUM/Notaris', [DocumentController::class, 'Notaris'])->name('notaris');

Route::get('/PEMBUATANDOKUM/suratKuasa', [DocumentController::class, 'SuratKuasa'])->name('suratKuasa');

Route::get('/PEMBUATANDOKUM/Perjanjian', [DocumentController::class, 'Perjanjian'])->name('perjanjian');

Route::get('/PEMBUATANDOKUM/Pengadilan', [DocumentController::class, 'Pengadilan'])->name('pengadilan');

Route::get('/PEMBUATANDOKUM/buatSurat', [DocumentController::class, 'buatSurat'])->name('buatSurat');

// Route::get('/PEMBUATANDOKUM/SuratKuasa/buatSurat', [DocumentController::class, 'buatKuasa'])->name('buatSuratKuasa');

// Route::get('/PEMBUATANDOKUM/Notaris/buatSurat', [DocumentController::class, 'buatNotaris'])->name('buatNotaris');

// Route::get('/PEMBUATANDOKUM/Perjanjian/buatSurat', [DocumentController::class, 'buatPerjanjian'])->name('buatPerjanjian');

// Route::get('/PEMBUATANDOKUM/Gugatan/buatSurat', [DocumentController::class, 'buatGugatan'])->name('buatGugatan');

// Route::get('/PEMBUATANDOKUM/Pengadilan/buatSurat', [DocumentController::class, 'buatPengadilan'])->name('buatPengadilan');

// 
Route::post('/dokumenpost', [DocumentController::class, 'store'])->name('store');

