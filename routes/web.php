<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/second',[TestController::class, 'second'] )->name('second');

Route::get('/third',[TestController::class, 'third'] )->name('third');