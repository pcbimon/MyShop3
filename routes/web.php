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
    Route::post('/',function(){
        return 'Store Product';
    })->name('store');
    Route::get('/{id}/edit',[ProductController::class,'Edit'])->name('edit');
    Route::put('/{id}',function($id){
        return 'Update Product ID '.$id;
    })->name('update');
    Route::delete('/{id}',function($id){
         'Delete Product ID '.$id;
    })->name('delete');
});
Route::group(['prefix'=>'user','as'=>'user.'], function() {
    Route::get('/login',function(){
        return 'View Login Page';
    })->name('login');
    Route::post('/login',function(){
        return 'Authentication';
    })->name('authen');
    Route::get('/logout',function(){
        return 'Logout and go to home';
    })->name('logout');
    Route::get('/',[UserController::class,'Index'])->name('index');
    Route::get('/create',[UserController::class,'Create'])->name('create');
    Route::post('/',function(){
        return 'Store User';
    })->name('store');
    Route::get('/{id}/edit',[UserController::class,'Edit'])->name('edit');
    Route::put('/{id}',function($id){
        return 'Update User ID '.$id;
    })->name('update');
    Route::delete('/{id}',function($id){
        return 'Delete User ID '.$id;
    })->name('delete');
});
