<?php

use App\Http\Controllers\ApiCategoriesController;
use App\Http\Controllers\ApiProductsController;
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

// Categories
Route::get('/categories', [ApiCategoriesController::class, 'index']);
Route::post('/addCategories', [ApiCategoriesController::class, 'store']);

// Products
Route::get('/products', [ApiProductsController::class, 'index']);
Route::get('/show/{id}', [ApiProductsController::class, 'edit']);
Route::post('/addProducts', [ApiProductsController::class, 'store']);
Route::post('/update-products/{id}', [ApiProductsController::class, 'update']);
Route::get('/delete-products/{id}', [ApiProductsController::class, 'destroy']);
