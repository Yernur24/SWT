<?php

use App\Http\Controllers\Adm\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth2\RegisterController;
use App\Http\Controllers\Auth2\LoginController;
use App\Http\Controllers\Adm\UserController;

Route::get('/', function () {
    return redirect()->route('products.index');
});
Route::middleware('auth')->group(function(){
    Route::resource('products',ProductController::class)->except('index','show');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::prefix('adm')->as('adm.')->middleware('has.role:admin,moderator')->group(function(){
        Route::get('/users' ,[UserController::class,'index'])->name('users.index');
        Route::get('/users/search',[UserController::class, 'index'])->name('users.search');
        Route::get('/users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{user}/update',[UserController::class, 'update'])->name('users.update');
        Route::put('/users/{user}/ban',[UserController::class, 'ban'])->name('users.ban');
        Route::put('/users/{user}/unban',[UserController::class, 'unban'])->name('users.unban');
        Route::get('/category',[CategoryController::class, 'index'])->name('category.index');
        Route::get('/category/create',[CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/store',[CategoryController::class, 'store'])->name('category.store');
        Route::delete('/category/delete/{category}',[CategoryController::class, 'delete'])->name('category.delete');
    });
});
Route::resource('products',ProductController::class)->only('index','show');
Route::get('/products/bycat/{category}',[ProductController::class,'productByCat'])->name('productByCat');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register',[RegisterController::class, 'create'])->name('register.form');
Route::post('/register',[RegisterController::class ,'register'])->name('register');
Route::get('/login',[LoginController::class, 'create'])->name('login.form');
Route::post('/login',[LoginController::class ,'login'])->name('login');



