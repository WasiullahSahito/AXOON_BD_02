<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class)->except('show');
Route::get('products/cards', [ProductController::class, 'cards'])->name('products.cards');

