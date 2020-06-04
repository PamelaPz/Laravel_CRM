<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('home');

Route::get('/clientes', 'UserController@index')
    ->name('customers');

Route::get('/usuarios/{id}', 'UserController@show')
    ->where(['id' => '[0-9]+']);

Route::get('/productos', 'ProductsController@index')
    ->name('products');

Route::get('/pedidos', 'OrdersController@index')
    ->name('orders');

Route::get('/pedidos/{id}', 'OrdersController@show')
    ->where(['id' => '[0-9]+']);

Route::get('/reportes', 'ReportsController@index')
    ->name('reports');