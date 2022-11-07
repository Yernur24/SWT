<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth2\RegisterController;
use App\Http\Controllers\Auth2\LoginController;

Route::get('/', function () {
    return redirect()->route('products.index');
});
Route::middleware('auth')->group(function(){
    Route::resource('products',ProductController::class)->except('index','show');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
Route::resource('products',ProductController::class)->only('index','show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register',[RegisterController::class, 'create'])->name('register.form');
Route::post('/register',[RegisterController::class ,'register'])->name('register');
Route::get('/login',[LoginController::class, 'create'])->name('login.form');
Route::post('/login',[LoginController::class ,'login'])->name('login');
