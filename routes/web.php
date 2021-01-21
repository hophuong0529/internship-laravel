<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;

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
Route::get('', [HomeController::class, 'home']);

Route::get('product/{id}', [HomeController::class, 'details']);

Route::get('search', [HomeController::class, 'search']);

Route::get('cart/{action?}/{id?}', [CartController::class, 'cart']);
Route::post('cart/{action?}/{id?}', [CartController::class, 'cart']);
