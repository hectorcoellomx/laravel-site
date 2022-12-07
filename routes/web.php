<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', [ HomeController::class, 'index' ] )->name('about');
Route::get('/about', [ AboutController::class, 'index' ]);
Route::get('/products', [ ProductsController::class, 'index' ]);
Route::get('/product/{id}', [ ProductsController::class, 'single' ]);
Route::get('/contact', [ ContactController::class, 'index' ]);
