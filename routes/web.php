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
Route::get('/add', [App\Http\Controllers\HomeController::class, 'add'])->name('add');
Route::post('/tambahdata', [App\Http\Controllers\HomeController::class, 'tambahdata'])->name('tambahdata');
Route::get('/detail/{id}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
