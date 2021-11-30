<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactDetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Contact Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'create'])->name('contact.store');

// Routes where auth is needed
Route::group(['middleware' => 'auth'], function () {
    // Register Route
    Route::post('/register', [RegisterController::class, 'create']);

    // Admin Routes
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');

    // Admin Product Routes
    Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/admin/product/create', [ProductController::class, 'store'])->name('product.store');
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/admin/product/edit/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/admin/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    // Admin Category Routes
    Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/admin/category/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/admin/category/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/admin/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    // Admin Information Routes (Contact Details)
    Route::get('/admin/information/edit', [ContactDetailsController::class, 'edit'])->name('information.edit');
    Route::post('/admin/information/edit', [ContactDetailsController::class, 'update'])->name('information.update');
});
