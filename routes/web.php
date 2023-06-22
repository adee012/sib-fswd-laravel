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
    Route::get('/', [LandingController::class, 'index']);
    // Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login-proses', [LoginController::class, 'authenticate']);
    Route::get('/register', [UsersController::class, 'formRegist']);
    Route::post('/register', [UsersController::class, 'register']);
});

// Untuk mengakses halaman admin/dashboard maka harus login terlebih dahulu
Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // User Controller
    Route::get('/UsersList', [UsersController::class, 'index'])->middleware(['access']);
    Route::get('/addUser', [UsersController::class, 'create'])->middleware(['access']);
    Route::post('/addUser', [UsersController::class, 'store'])->name('user-new');
    Route::get('/detail-user', [UsersController::class, 'show']);
    Route::put('/update-detail', [UsersController::class, 'updateDetail']);
    Route::put('/change-password', [UsersController::class, 'changePassword']);
    Route::get('/users-edit/{id}', [UsersController::class, 'edit'])->middleware(['access']);
    Route::put('/user-edit', [UsersController::class, 'update'])->middleware(['access']);
    Route::get('/users-delete/{id}', [UsersController::class, 'destroy'])->middleware(['access']);

    // User Group
    Route::get('/UserGroup', [UsersController::class, 'group'])->middleware(['access']);
    Route::get('/admin-group', [UsersController::class, 'role_admin'])->middleware(['access']);
    Route::get('/staff-group', [UsersController::class, 'role_staff'])->middleware(['access']);
    Route::get('/user-group', [UsersController::class, 'role_user'])->middleware(['access']);

    // Products Controller
    Route::get('/ProductList', [ProductsController::class, 'index'])->middleware(['access']);
    Route::get('/addProduct', [ProductsController::class, 'create'])->middleware(['access']);
    Route::post('/addProduct', [ProductsController::class, 'store'])->middleware(['access']);
    Route::get('/product-edit/{id}', [ProductsController::class, 'edit'])->middleware(['access']);
    Route::put('/product-edit', [ProductsController::class, 'update'])->middleware(['access']);
    Route::get('/product-delete/{id}', [ProductsController::class, 'destroy'])->middleware(['access']);
    Route::get('/validation-product', [ProductsController::class, 'validation'])->middleware(['access']);
    Route::put('/products-rejected/{id}', [ProductsController::class, 'rejected'])->middleware(['access']);
    Route::put('/products-accepted/{id}', [ProductsController::class, 'accepted'])->middleware(['access']);

    // Categories Controller
    Route::get('/categories', [CategoriesController::class, 'index'])->middleware(['access']);
    Route::post('/addCategories', [CategoriesController::class, 'store'])->middleware(['access']);
    Route::put('/categories-edit', [CategoriesController::class, 'update'])->middleware(['access']);
    Route::get('/categories-delete/{id}', [CategoriesController::class, 'destroy'])->name('delete')->middleware(['access']);

    // Carousels Controller
    Route::get('/carousels', [CarouselsController::class, 'index'])->middleware(['access']);
    Route::post('/addCarousels', [CarouselsController::class, 'store'])->middleware(['access']);
    Route::put('/carousels-rejected/{id}', [CarouselsController::class, 'rejected'])->middleware(['access']);
    Route::put('/carousels-accepted/{id}', [CarouselsController::class, 'update'])->middleware(['access']);
    Route::get('/carousels-delete/{id}', [CarouselsController::class, 'destroy'])->middleware(['access']);
});

Route::get('/home', function () {
    return redirect('dashboard');
});
