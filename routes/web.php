<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/',[ProductController::class,'index'])->name('product.index');
    Route::get('/create',[ProductController::class,'create'])->name('product.create');
    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::get('/show/{id}',[ProductController::class,'show'])->name('product.show');
    Route::get('/delete/{id}',[ProductController::class,'destroy'])->name('product.destroy');
    Route::post('/store',[ProductController::class,'store'])->name('product.store');
    Route::post('/update/{id}',[ProductController::class,'update'])->name('product.update');
});


// Route::prefix('product')->group(function(){
//     Route::get('/',[ProductController::class,'index'])->name('product.home');
//     Route::get('/create',[ProductController::class,'create'])->name('product.create');
//     Route::get('/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
//     Route::get('/show/{id}',[ProductController::class,'show'])->name('product.show');
//     Route::get('/delete/{id}',[ProductController::class,'destroy'])->name('product.destroy');
//     Route::post('/store',[ProductController::class,'store'])->name('product.store');
//     Route::post('/update/{id}',[ProductController::class,'update'])->name('product.update');
// });
