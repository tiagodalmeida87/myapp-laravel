<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

//Route Login
Route::get('/login/{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('site.login');

Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product');

//Route Client
Route::get('/admin/clients', [ClientController::class, 'index'])->name('client.clients');

Route::get('/admin/clients/create', [ClientController::class, 'create'])->name('client.create');
Route::post('/admin/clients', [ClientController::class, 'store'])->name('client.store');
Route::get('/admin/clients/{client}/edit', [ClientController::class, 'edit'])->name('client.edit');
Route::put('/admin/clients/{client}', [ClientController::class, 'update'])->name('client.update');
Route::delete('/admin/clients/{client}', [ClientController::class, 'destroy'])->name('client.destroy');

//Route Admin
Route::get('/admin/products', [AdminProductController::class, 'index'])->name('admin.products');

//Route Product
Route::get('/admin/products/create', [AdminProductController::class, 'create'])->name('admin.product.create');
Route::get('/admin/products/order', [AdminProductController::class, 'create'])->name('admin.product.order');
Route::post('/admin/products', [AdminProductController::class, 'store'])->name('admin.product.store');
Route::get('/admin/products/{product}/edit', [AdminProductController::class, 'edit'])->name('admin.product.edit');
Route::put('/admin/products/{product}', [AdminProductController::class, 'update'])->name('admin.product.update');

Route::delete('/admin/products/{product}', [AdminProductController::class, 'destroy'])->name('admin.product.destroy');


Route::get('/admin/products/{product}/delete-image', [AdminProductController::class, 'destroyImage'])->name('admin.product.destroyImage');


