<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
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



Route::get('/',[CartController::class, "index"]);
Route::get('/products',[CartController::class, "orders"])->name('products.order');
Route::get('/product',[CartController::class, "order"])->name('product.order');
Route::get('/admin',[AdminController::class, "index"]);
Route::get('/profile',[UserController::class, "profile"]);
Route::get('/login',[UserController::class, 'login_get']);
Route::post('/login',[UserController::class, 'login_post']);

Route::get('/register',[UserController::class, 'register_get']);
Route::post('/register',[UserController::class, 'register_post']);

Route::get('/logout',[UserController::class,'logout']);
Route::get('/admin_dashboard',[AdminController::class, "admin_get"]);
Route::post('/admin_dashboard',[AdminController::class, "admin_post"]);
Route::get('/profile_amin',[AdminController::class, "admin_profile"]);
Route::get('/admin_logout',[AdminController::class, "admin_logout"]);


Route::get('/admin/cities',[CityController::class, "get_all"]);
Route::get('/admin/cities/add', [CityController::class, 'add_get']);
Route::post('/admin/cities/add', [CityController::class, 'add_post']);
Route::get('admin/cities/edit/{id}', [CityController::class, 'edit_get']);
Route::post('admin/cities/edit', [CityController::class, 'edit_post']);
Route::get('admin/cities/delete/{id}', [CityController::class, 'delete']);
//product
Route::get('/admin/product',[CityController::class, 'all']);
//add
Route::get('/admin/product/add', [CityController::class, 'add_pr_get']);
Route::post('/admin/product/add', [CityController::class, 'add_pr_post']);
//edit
Route::get('/admin/product/edit/{id}', [CityController::class, 'edit_pr_get']);
Route::post('/admin/product/edit', [CityController::class, 'edit_pr_post']);
//delete
Route::get('admin/product/delete/{id}', [CityController::class, 'ddelete']);


Route::get('/admin/users', function () {
    return view('admin.user');
});
Route::get('/admin/comment', [ProductController::class, 'comments']);


Route::get('/admin/de', function () {
    return view('dashoard');
});
