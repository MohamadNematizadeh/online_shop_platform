<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;






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
Route::get('/products',[ProductController::class, "get_all_for_client"]);
Route::get('/product',[CartController::class, "order"])->name('product.order');
Route::get('/product/{id}',[ProductController::class, "product_details"] );
Route::post('/product-info',[ProductController::class, "product_info"]);
Route::post('/Star_product', [ProductController::class,  "Star_product"]);

Route::get('/admin',[AdminController::class, "index"]);
Route::get('/profile',[UserController::class, "profile"]);
Route::get('/login',[UserController::class, 'login_get']);
Route::post('/login',[UserController::class, 'login_post']);

Route::get('/register',[UserController::class, 'register_get']);
Route::post('/register',[UserController::class, 'register_post']);

Route::get('/logout',[UserController::class,'logout']);
Route::get('/admin_dashboard',[AdminController::class, "admin_get"]);
Route::post('/admin_dashboard',[AdminController::class, "admin_post"]);
Route::get('/profile_amin',[AdminController::class, "admin_profile"])->middleware("auth");
Route::get('/admin_logout',[AdminController::class, "admin_logout"]);


Route::get('/admin/cities',[CityController::class, "get_all"]);
Route::get('/admin/cities/add', [CityController::class, 'add_get']);
Route::post('/admin/cities/add', [CityController::class, 'add_post']);
Route::get('admin/cities/edit/{id}', [CityController::class, 'edit_get']);
Route::post('admin/cities/edit', [CityController::class, 'edit_post']);
Route::get('admin/cities/delete/{id}', [CityController::class, 'delete']);
//product
Route::get('/admin/products',[ProductController::class, "get_all_for_admin"]);
Route::get('/admin/products/add', [ProductController::class, 'add_get']);
Route::post('/admin/products/add', [ProductController::class, 'add_post']);
Route::get('admin/products/edit/{id}', [ProductController::class, 'edit_get']);
Route::post('admin/products/edit', [ProductController::class, 'edit_post']);
Route::get('admin/products/delete/{id}', [ProductController::class, 'delete']);

Route::post('/send-comment',[CommentController::class,'send_comment']);





Route::get('/admin/users', function () {
    return view('admin.user');
});
Route::get('/admin/comment', [ProductController::class, 'comments']);



Route::group(['prefix' => 'laravel-filemanager',] ,function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
