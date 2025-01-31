<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('umah');
});
Route::get('/add', function () {
    return view('add');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add', [App\Http\Controllers\BeritaController::class, 'index'])->name('index');
Route::post('/tambahdata', [App\Http\Controllers\BeritaController::class, 'tambahdata'])->name('tambahdata');
