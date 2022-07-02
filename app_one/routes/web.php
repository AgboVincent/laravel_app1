<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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

Route::get('/o', function () {
    return view('welcome');
});

Route::get('/users', [ProductsController::class, 'index']);

//Pattern is an integer
Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');

//pattern is a string
Route::get('/products/{name}', [ProductsController::class, 'show'])->where('name', '[a-zA-Z]+');

//Pattern is a multiple
Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where([
    'name' => '[a-z]+',
    'id' => '[0-9]+'
]);

Route::get('/products', [ProductsController::class, 'index'])->name('products');

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

//Posts end point
Route::get('/posts', [PostsController::class, 'index']);