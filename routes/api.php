<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('api.product.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show'); 
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/{id}/delete', [ProductController::class, 'delete'])->name('products.delete');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
