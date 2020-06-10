<?php

use Illuminate\Support\Facades\Route;

/* Ruta inicial */
Route::get('/', function () {
    return view('dashboard.dashboard');
})->name('home');

/* --- Acciones del CRUD */
Route::get('/create', 'ProductsController@create')
    ->name('create');

Route::get('/read', function () {
    return view('dashboard.read');
})->name('read');

Route::get('/update', function () {
    return view('dashboard.update');
})->name('update');

Route::get('/delete', function () {
    return view('dashboard.delete');
})->name('delete');

/* Ruta de clientes */
Route::get('clientes', 'UserController@index')
    ->name('customers');

Route::get('clientes/{id}', 'UserController@show')
    ->where(['id' => '[0-9]+'])
    ->name('customer.info');

/* Ruta de productos */
Route::get('productos', 'ProductsController@index')
    ->name('products');

// Route::get('productos/crear', 'ProductsController@create')
//     ->name('products.create');

Route::post('productos/guardar', 'ProductsController@store')
    ->name('products.store');

Route::get('productos/editar/{id}', 'ProductsController@edit')
    ->name('products.edit');

Route::post('productos/actualizar', 'ProductsController@update')
    ->name('products.update');

/* Ruta de pedidos */
Route::get('pedidos', 'OrdersController@index')
    ->name('orders');

Route::get('pedidos/{id}', 'OrdersController@show')
    ->where(['id' => '[0-9]+']);

/* Ruta de reportes */
Route::get('reportes', 'ReportsController@index')
    ->name('reports');

/* Ruta de empleados */
Route::get('employe', 'EmployesController@index')
    ->name('employe');

