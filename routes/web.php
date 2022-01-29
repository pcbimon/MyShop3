<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return 'show all product';
})->name('home');
Route::get('/about',function(){
    return 'About Shop';
})->name('about');
Route::group(['prefix'=>'product','as'=>'product.'], function() {
    Route::get('/',function(){
        return 'All Product';
    })->name('index');
    Route::get('/create',function(){
        return 'Create New Product';
    })->name('create');
    Route::post('/',function(){
        return 'Store Product';
    })->name('store');
    Route::get('/{id}/edit',function($id){
        return 'Edit Product ID '.$id;
    })->name('edit');
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
    Route::get('/',function(){
        return '<h1>All User</h1>';
    })->name('index');
    Route::get('/create',function(){
        return 'Create New User';
    })->name('create');
    Route::post('/',function(){
        return 'Store User';
    })->name('store');
    Route::get('/{id}/edit',function($id){
        return 'Edit User ID '.$id;
    })->name('edit');
    Route::put('/{id}',function($id){
        return 'Update User ID '.$id;
    })->name('update');
    Route::delete('/{id}',function($id){
        return 'Delete User ID '.$id;
    })->name('delete');
});
