<?php

use App\Http\Controllers\CartController;
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

Route::get('/', 'FrontController@index')->name('home');
Route::get('/gents', 'FrontController@gents')->name('gents');
Route::get('/ladies', 'FrontController@ladies')->name('ladies');
Route::get('/item/{id}', 'FrontController@item')->name('show');
Auth::routes();

Route::group(['prefix' => 'admin','middleware' => ['auth','admin']],function () {
	Route::get('/', function () {
		return view('admin.index');
	})->name('admin');
});

	Route::resource('category','CategoryController');
	Route::resource('products','ProductsController');
	Route::resource('cart','CartController');

//Route::get('addItems/{id}/{size}','CartController@addItems')->name('cartview');
//Route::get('/shop/{id}','CartController@updateSize')->name('size');
//Route::get('/size/{id}','CartController@selectSize')->name('selectSize');

	Route::get('checkout','CheckoutController@step1')->name('checkout');
Route::get('complete','CheckoutController@step2')->name('complete');




