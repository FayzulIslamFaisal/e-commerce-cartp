<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AppController::class,'index'])->name('app.index');
Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/details/{id}',[ShopController::class,'productDetails'])->name('shop.product.details');

Auth::routes();


// user middleware
Route::middleware('auth')->group(function(){
    Route::get('/myaccount',[UserController::class,'index'])->name('users.index');
});
// admin middleware
Route::middleware('auth','auth.admin')->group( function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
});
