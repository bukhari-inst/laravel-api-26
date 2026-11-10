<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductsController::class);

Route::get('/product', [
    ProductController::class,
    'index'
]);
Route::get('/product/{id}', [
    ProductController::class,
    'show'
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Halo, Laravel!';
});

// Route::delete('/product/{id}', function () {});
// Route::put('/product/{id}', function () {});
// Route::post('/product', function () {});

Route::get('/product/{id}/edit', function ($id) {
    return 'Form edit produk #' . $id;
})->name('products.edit');
