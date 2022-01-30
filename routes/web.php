<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [StoreController::class,'Home'])->name('home');
Route::get('/about',[StoreController::class,'About'])->name('about');
Route::group(['prefix'=>'product','as'=>'product.'], function() {
    Route::get('/',[ProductController::class,'Index'])->name('index');
    Route::get('/create',[ProductController::class,'Create'])->name('create');
    Route::post('/',[ProductController::class,'Store'])->name('store');
    Route::get('/{id}/edit',[ProductController::class,'Edit'])->name('edit');
    Route::put('/{id}',[ProductController::class,'Update'])->name('update');
    Route::delete('/{id}',[ProductController::class,'delete'])->name('delete');
});
Route::group(['prefix'=>'user','as'=>'user.'], function() {
    Route::get('/login',[UserController::class,'Login'])->name('login');
    Route::post('/login',[UserController::class,'Authen'])->name('authen');
    Route::get('/logout',[UserController::class,'Logout'])->name('logout');
    Route::get('/',[UserController::class,'Index'])->name('index');
    Route::get('/create',[UserController::class,'Create'])->name('create');
    Route::post('/',[UserController::class,'Store'])->name('store');
    Route::get('/{id}/edit',[UserController::class,'Edit'])->name('edit');
    Route::put('/{id}',[UserController::class,'Update'])->name('update');
    Route::delete('/{id}',[UserController::class,'Delete'])->name('delete');
});
