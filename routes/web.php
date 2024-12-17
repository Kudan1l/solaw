<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Login;
use App\Http\Controllers\ConsultantController;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ThreadController;

use App\Http\Controllers\AdminController;

use App\Http\Middleware\checkLogin;

// Home
Route::get("/", [HomeController::class,"index"])->name("home");


// Route::get('/login', [Login::class, 'index'])->name('login');
// Route::post('/loginPost', [Login::class, 'login'])->name('loginPost');

// Route::middleware(['auth', 'role:user'])->group(function() {
//     Route::get("/artikel", [HomeController::class,"articleMenu"])->name("article");
//     Route::get("/artikel/{id}", [HomeController::class,"showArticle"])->name("article.detail");
// });

Route::get("/artikel", [HomeController::class,"articleMenu"])->name("article");
Route::get("/artikel/{id}", [HomeController::class,"showArticle"])->name("article.detail");

// Route::get('/dashboard', function() {
//     $user = Auth::user();
//     return view('dashboard_user', ['user' => $user]);
// })->name('dashboard')->middleware(['auth', 'role:admin']);

Route::get('/login', [Login::class, 'index'])->name('login');
Route::post('/loginPost', [Login::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [Login::class, 'logout'])->name('logout');


Route::get('/forgotpass', [Login::class, 'forgotview'])->name('forgotview');
Route::post('/forgotpass', [Login::class, 'update'])->name('forgotupdate');

Route::get('/signup', [Login::class, 'signUpView'])->name('signupview');
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

// Consultant
Route::get('/konsultan-hukum', [ConsultantController::class, 'ConsultantsMenu'])->name('consultant');
Route::get('/konsultan-hukum/{id}', [ConsultantController::class, 'ConsultantDetail'])->name('consultant.detail');

Route::get('/forgot-password', [Login::class, 'forgotview'])->name('forgot-password-view');
Route::post('/forgot-password', [Login::class, 'searchAccount'])->name('forgot-password-search');

// Thread Routes
Route::get('/threads', [ThreadController::class, 'index'])->name('threads');
Route::get('/threads/create', [ThreadController::class, 'create'])->name('threads.create');
Route::post('/threads', [ThreadController::class, 'store'])->name('threads.store');
Route::get('/threads/{thread}', [ThreadController::class, 'show'])->name('threads.show');
Route::post('/threads/search', [ThreadController::class, 'search'])->name('threads.search');

// Comment Routes
Route::post('/comments', [CommentController::class, 'store'])->name('comment.store');


// Middleware Admin
Route::middleware(['auth', 'role:admin'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('dashboard.admin');
    Route::get('/admin/articles/{article}/edit', [AdminController::class, 'edit'])->name('admin.article.edit');
    Route::put('/admin/articles/{article}/edit', [AdminController::class, 'update'])->name('admin.article.update');
    Route::get('/admin/articles/create', [AdminController::class, 'create'])->name('admin.article.create');
    Route::post('/admin/articles/create', [AdminController::class, 'store'])->name('admin.article.create');
    Route::delete('/admin/articles/{article}', [AdminController::class, 'destroy'])->name('admin.article.delete');
});

Route::get('/prosedure', function () {
    return view('procedure/view');
});

Route::get('/ks', function () {
    return view('procedure/ks');
})->name('ks');

Route::get('/kp', function () {
    return view('procedure/kp');
})->name('kp');

Route::get('/ca', function () {
    return view('procedure/ca');
})->name('ca');
