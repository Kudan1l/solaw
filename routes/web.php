<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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