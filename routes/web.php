<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/second',[TestController::class, 'second'] )->name('second');

Route::get('/third',[TestController::class, 'third'] )->name('third');

Route::get('/home',[TestController::class, 'home'] )->name('home');


/*         */

Route::get('/products', [ProductController::class, 'index'])
        ->name('products.index');

Route::get('/products/create', ([ProductController::class, 'create']))
        ->name('products.create');

Route::post('/products', [ProductController::class, 'store'])
        ->name('products.store');

Route::get('/products/{product}', [ProductController::class, 'show'])
        ->name('products.show');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])
        ->name('products.edit');

Route::put('/products/{product}', [ProductController::class, 'update'])
        ->name('products.update');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])
        ->name('products.destroy');