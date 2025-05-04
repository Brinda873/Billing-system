<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\Purchase_orderController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProfileController;
use App\Models\Stock;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//------------------product----------------------
Route::get('/Pr_list',[ProductController::class,'index']);
Route::get('/Pr_create',[ProductController::class,'form']);
Route::post('/Pr_store',[ProductController::class,'store']);
Route::get('/Pr_edit/{id}',[ProductController::class,'edit']);
Route::get('/Pr_delete/{id}',[ProductController::class,'delete']);
Route::post('/Pr_update/{id}',[ProductController::class,'update']);
//------------------purchase----------------------
Route::get('/Po_list',[Purchase_orderController::class,'index']);
Route::get('/Po_create',[Purchase_orderController::class,'form']);
Route::post('/Po_store',[Purchase_orderController::class,'store']);
Route::get('/Po_edit/{id}',[Purchase_orderController::class,'edit']);
Route::get('/Po_delete/{id}',[Purchase_orderController::class,'delete']);
Route::post('/Po_update/{id}',[Purchase_orderController::class,'update']);
//------------------Stock----------------------
Route::get('/st_list',[StockController::class,'index']);
Route::get('/st_create',[StockController::class,'form']);
Route::post('/st_store',[StockController::class,'store']);
Route::get('/st_edit/{id}',[StockController::class,'edit']);
Route::get('/st_delete/{id}',[StockController::class,'delete']);
Route::post('/st_update/{id}',[StockController::class,'update']);



