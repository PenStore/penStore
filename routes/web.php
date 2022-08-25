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



use App\Http\Controllers\AdminProduct;
Route::get('/admin/add-product', [AdminProduct::class, "addProduct"]);
Route::get('product',function(){
	return view('pages.about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});


Route::get('/product/{id}', [ProductsController::class, 'show']);


Route::get('/product/{id}', [ProductsController::class, 'show'])->name('showProduct');
Route::get('/admin', [AdminController::class, 'index'])->middleware('isUserAdmin');
Route::get('/account', [UserController::class, 'index'])->name('account');
Route::get('/catalog', [ProductsController::class, 'index'])->name('catalog');

