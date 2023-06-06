<?php

use App\Http\Controllers\CarouselsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Ketika sudah login maka harus logout untuk mengakses landingpage dan halaman login
Route::middleware(['guest'])->group(function () {
    // Landing Page
    Route::get('/', function () {
        return view('index');
    });
    // Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});


// Untuk mengakses halaman admin/dashboard maka harus login terlebih dahulu
Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // User List
    Route::get('/UsersList', [UsersController::class, 'index']);
    Route::get('/addUser', [UsersController::class, 'create']);
    Route::get('/detail-user', [UsersController::class, 'show']);
    Route::post('/addUser', [UsersController::class, 'store'])->name('user-new');
    Route::get('/users-edit/{id}', [UsersController::class, 'edit']);
    Route::put('/user-edit', [UsersController::class, 'update']);
    Route::get('/users-delete/{id}', [UsersController::class, 'destroy']);

    // User Group
    Route::get('/UserGroup', [UsersController::class, 'group']);

    // Products
    Route::get('/ProductList', [ProductsController::class, 'index']);
    Route::get('/addProduct', [ProductsController::class, 'create']);
    Route::post('/addProduct', [ProductsController::class, 'store']);
    Route::get('/product-edit/{id}', [ProductsController::class, 'edit']);
    Route::put('/product-edit', [ProductsController::class, 'update']);
    Route::get('/product-delete/{id}', [ProductsController::class, 'destroy']);

    // Categories
    Route::get('/categories', [CategoriesController::class, 'index']);
    Route::get('/addCategories', [CategoriesController::class, 'create']);
    Route::post('/addCategories', [CategoriesController::class, 'store']);
    Route::get('/categories-edit/{id}', [CategoriesController::class, 'edit']);
    Route::put('/categories-edit', [CategoriesController::class, 'update']);
    Route::get('/categories-delete/{id}', [CategoriesController::class, 'destroy'])->name('delete');

    // Carousels
    Route::get('/carousels', [CarouselsController::class, 'index']);
    Route::get('/addCarousels', [CarouselsController::class, 'create']);
    Route::post('/addCarousels', [CarouselsController::class, 'store']);
    Route::get('/carousels-edit/{id}', [CarouselsController::class, 'edit']);
    Route::put('/carousels-edit', [CarouselsController::class, 'update']);
    Route::get('/carousels-delete/{id}', [CarouselsController::class, 'destroy']);
});

Route::get('/home', function () {
    return redirect('/dashboard');
});
