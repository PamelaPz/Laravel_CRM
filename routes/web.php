<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/clientes', 'UserController@index');

Route::get('/usuarios/{id}', 'UserController@show')
    ->where(['id' => '[0-9]+']);

Route::get('/productos', 'ProductsController@index');

Route::get('/pedidos', 'OrdersController@index');

Route::get('/pedidos/{id}', 'OrdersController@show')
    ->where(['id' => '[0-9]+']);

Route::get('/reportes', 'ReportsController@index');