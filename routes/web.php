<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'home'])   ->name('home');



Auth::routes();
// Carrito de compra-cliente

 Route::group(['middleware' => 'client','prefix' => '/user'], function () {
 Route::get('',         [ClientController::class, 'shop'])   ->name('shop');

 Route::get('cart',     [ClientController::class, 'cart'])   ->name('client.cart');
 Route::post('add',     [ClientController::class, 'add'])    ->name('client.cart.add');
 Route::post('update',  [ClientController::class, 'update']) ->name('cart.update');
 Route::post('remove',  [ClientController::class, 'remove']) ->name('cart.remove');
 Route::post('clear',   [ClientController::class, 'clear'])  ->name('cart.clear');

 Route::get('orden', [ClientController::class, 'order'])  ->name('client.order');

 Route::get('nosotros',         [ClientController::class, 'nosotros'])   ->name('nosotros');
 Route::get('contact',          [ClientController::class, 'contact'])    ->name('contact');
 Route::get('pages',            [ClientController::class, 'pages'])    ->name('pages');
 });


//Admin
Route::group(['middleware' => 'admin','prefix' => '/admin'], function () {
 //Admin-dashboard
Route::get('', [AdminController::class, 'dashboard'])->name('admin.index');
//Admin-product
Route::get('products', [AdminProductController::class, 'admin_products_index'])->name('admin.products.index');
Route::get('products/create', [AdminProductController::class, 'admin_products_create'])->name('admin.products.create');
Route::post('products/create', [AdminProductController::class, 'admin_products_store'])->name('admin.products.store');
Route::get('products/{id}/edit', [AdminProductController::class, 'admin_products_edit'])->name('admin.products.edit');
Route::post('products/{id}/edit', [AdminProductController::class, 'admin_products_update'])->name('admin.products.update');
Route::delete('products/{id}', [AdminProductController::class, 'admin_products_destroy'])->name('admin.products.destroy');


//Admin-users
Route::get('users', [AdminUsersController::class, 'admin_users_index'])->name('admin.users.index');
Route::get('users/{id}/edit', [AdminUsersController::class, 'admin_users_edit'])->name('admin.users.edit');
Route::post('users/{id}/edit', [AdminUsersController::class, 'admin_users_update'])->name('admin.users.update');
Route::delete('users/{id}', [AdminUsersController::class, 'admin_users_destroy'])->name('admin.users.destroy');

});
















//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
