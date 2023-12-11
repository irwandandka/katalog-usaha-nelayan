<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', [ProductController::class, 'get']);
Route::get('/product/{product}', [ProductController::class, 'productDetail']);
Route::get('/categories', [CategoryController::class, 'get']);
Route::get('/product-category/{category}', [ProductController::class, 'productCategory']);
Route::get('/sellers', [SellerController::class, 'get']);


Route::get('/file', [ProductController::class, 'getFile']);