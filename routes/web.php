<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
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
Route::get('', [HomeController::class, 'home'])->name('home');

Route::get('products/{id}', [ProductController::class, 'details']);

Route::get('search', [HomeController::class, 'search']);

Route::get('cart/{action?}/{id?}', [CartController::class, 'cart']);
Route::post('cart/{action?}/{id?}', [CartController::class, 'cart']);

Route::prefix('admin')->group(function() {
    Route::get('', [AdminController::class, 'home'])->name('admin.home')->middleware(['admin']);
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('login', [AdminController::class, 'postLogin']);
    Route::get('logout', [AdminController::class, 'logout']);

    Route::prefix('products')->middleware('admin')->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('products.index');
        Route::get('create', [ProductController::class, 'create'])->name('products.create');
        Route::post('create', [ProductController::class, 'store'])->name('products.store');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
        Route::post('edit/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::get('delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
    });

    Route::prefix('carts')->middleware('admin')->group(function () {
        Route::get('', [CartController::class, 'index'])->name('carts.index');
        Route::get('create', [CartController::class, 'create'])->name('carts.create');
        Route::post('create', [CartController::class, 'store'])->name('carts.store');
        Route::get('edit/{id}', [CartController::class, 'edit'])->name('carts.edit');
        Route::post('edit/{id}', [CartController::class, 'update'])->name('carts.update');
        Route::get('delete/{id}', [CartController::class, 'delete'])->name('carts.delete');
    });
});
