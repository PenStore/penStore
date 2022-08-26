<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureUserIsAdmin;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    $products = DB::table('products')
        ->join('product_images', 'products.id', 'product_images.product_id')
        ->select('product_images.image', 'products.*')
        ->where('product_images.main_image', '=', '1')
        ->limit(8)
        ->get();
    return view('welcome', ['products' => $products]);
})->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [ProductsController::class, 'show'])->name('showProduct');
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/account', [UserController::class, 'index'])->name('account');
Route::get('/catalog', [ProductsController::class, 'index'])->name('catalog');
Route::get('/about', function() {
    return view('home.about');
})->name('about');
Route::get('/gallery', function() {
    return view('home.gallery');
})->name('gallery');