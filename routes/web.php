<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StudentController;
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

// Repository Pattern*************
    Route::get('/student',[StudentController::class,'index'])->name('student');
    Route::get('/student-insert',[StudentController::class,'insertStudent'])->name('student_insert');
    Route::post('/add-student',[StudentController::class,'addStudent'])->name('add_student');
//End Repository Pattern*************

Route::get('/',[AppController::class,'index'])->name('app.index');

// product shopping route
Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/details/{id}',[ShopController::class,'productDetails'])->name('shop.product.details');
// product Cart route
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('/cart/store',[CartController::class,'addToCart'])->name('cart.store');
// javascrip dom example
Route::get('/javascriptexample',[CartController::class,'jsExampleFUnction'])->name('jstesting');



Auth::routes();


// user middleware
Route::middleware('auth')->group(function(){
    Route::get('/myaccount',[UserController::class,'index'])->name('users.index');
});
// admin middleware
Route::middleware('auth','auth.admin')->group( function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
});
