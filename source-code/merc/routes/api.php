<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('products', [App\Http\Controllers\Api\ProductController::class, 'getAllProductAPI']);


Route::get('products/{id}', [\App\Http\Controllers\Api\ProductController::class,'showById']);
Route::get('delete/products/{id}', [App\Http\Controllers\Api\ProductController::class,'deleteProductApi']);
Route::post('add/products', [App\Http\Controllers\Api\ProductController::class,'addProductApi']);
