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
Route::resource('threads', ThreadController::class)->except(['index', 'create', 'store', 'show']); // Menyederhanakan rute
// Comment Routes
Route::post('/comments', [CommentController::class, 'store'])->name('comment.store');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');


// Middleware Dashboard Admin
Route::middleware(['auth', 'role:admin'])->group(function() {
    Route::get('/dashboard', [AdminController::class, 'viewDashboard'])->name('dashboard');
    Route::prefix('dashboard/articles')->name('dashboard.article.')->group(function() {
        Route::get('/', [AdminController::class, 'viewArticle'])->name('index');
        Route::get('/form', [AdminController::class, 'viewFormArticle'])->name('add');
        Route::post('/form', [AdminController::class, 'storeArticle'])->name('store');
        Route::get('/edit/{article}', [AdminController::class, 'viewEditArticle'])->name('edit');
        Route::put('/edit/{article}', [AdminController::class, 'updateArticle'])->name('update');
        Route::delete('/{article}', [AdminController::class, 'destroyArticle'])->name('destroy');
    });
    Route::prefix('dashboard/users')->name('dashboard.user.')->group(function(){
        Route::get('/', [AdminController::class, 'viewUser'])->name('index');
        Route::delete('/{user}', [AdminController::class, 'destroyUser'])->name('destroy');
    });
    Route::prefix('dashboard/consultants')->name('dashboard.consultant.')->group(function(){
        Route::get('/', [AdminController::class, 'viewConsultant'])->name('index');
        Route::get('/form', [AdminController::class, 'viewFormConsultant'])->name('add');
        Route::post('/form', [AdminController::class, 'storeConsultant'])->name('store');
        Route::get('/edit/{consultant}', [AdminController::class, 'viewEditConsultant'])->name('edit');
        Route::put('/edit/{consultant}', [AdminController::class, 'updateConsultant'])->name('update');
    });
    
    Route::prefix('dashboard/admin')->name('dashboard.admin.')->group(function(){
        Route::get('/', [AdminController::class, 'viewAdmin'])->name('index');
        Route::get('/form', [AdminController::class, 'viewFormAdmin'])->name('add');
        Route::post('/form', [AdminController::class, 'storeAdmin'])->name('store');
        Route::get('/edit/{user}', [AdminController::class, 'viewEditAdmin'])->name('edit');
        Route::put('/edit/{user}', [AdminController::class, 'updateAdmin'])->name('update');
    });

    Route::post('/categories', [AdminController::class, 'storeCategory'])->name('categories.store');
    Route::post('/specialties', [AdminController::class, 'storeSpecialiy'])->name('speciality.store');
    
});

Route::get('/prosedure', function () {
    return view('procedure/view');
})->name('procedure.menu');

Route::get('/ks', function () {
    return view('procedure/ks');
})->name('ks');

Route::get('/kp', function () {
    return view('procedure/kp');
})->name('kp');

Route::get('/ca', function () {
    return view('procedure/ca');
})->name('ca');
