<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::view('/','home');

Route::controller(ProductController::class)->prefix('products')->name('products.')->group(function(){
    Route::get('/',[ProductController::class,'index'])->name('index');

    Route::get('/create','create')->name('create');

    Route::post('/store','store')->name('store');

    Route::get('/{product}','show')->name('show');

    Route::get('/{product}/edit','edit')->name('edit');

    Route::patch('/{product}','update')->name('update');

    Route::delete('/{product}','destroy')->name('destroy');
});
