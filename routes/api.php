<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('api')->group(function () {
	Route::get('products', 'Api\ProductController@lists');
	Route::get('products/{id}', 'Api\ProductController@read');
});

Route::prefix('auth')->group(function () {
	Route::post('login', 'Api\AuthController@login');
	Route::post('signup', 'Api\AuthController@signup');

	Route::middleware('auth:api')->group(function () {
		Route::get('user', 'Api\AuthController@user');
		Route::get('logout', 'Api\AuthController@logout');

		Route::prefix('cart')->group(function () {
			Route::post('add-product', 'Api\ShoppingCartController@addProduct');
			Route::post('list-products', 'Api\ShoppingCartController@products');
			Route::post('delete-product', 'Api\ShoppingCartController@deleteProduct');
		});

		Route::prefix('orders')->group(function () {
			Route::post('create', 'Api\OrderController@create');
		});
	});
});

Route::middleware('api')->group(function () {
	Route::get('statistics', 'Api\StatisticController@statistics');
});
