<?php

use Illuminate\Support\Facades\Route;

/* Ruta inicial */
Route::get('/', 'UserController@index')
    ->name('customers');

/* Ruta de info clientes */
Route::get('clientes/{id}', 'UserController@show')
    ->where(['id' => '[0-9]+'])
    ->name('customer.info');


/* Ruta de productos */
Route::get('productos', 'ProductsController@index')
    ->name('products');

Route::get('product/create', 'ProductsController@create') // Redirecciona al view de Crear Producto
    ->name('products.create');
    
Route::post('product/guardar', 'ProductsController@store') // Acción para crear Producto
    ->name('products.store');

Route::get('product/editar/{id}', 'ProductsController@edit') // Redericciona al view para ver datos
    ->name('products.editar');

Route::post('product/actualizar', 'ProductsController@update') // Acción para actualizar el producto seleccionado
    ->name('products.update');

Route::get('product/eliminar/{id}', 'ProductsController@delete') // Acción para actualizar el producto seleccionado
    ->name('products.delete');


/* Ruta de pedidos */
Route::get('pedidos', 'OrdersController@index')
    ->name('orders');

// Route::get('pedidos/{id}', 'OrdersController@show')
//     ->where(['id' => '[0-9]+']);



/* Ruta de reportes */
// Route::get('reportes/grafic', 'StatisticController@statistics')
//     ->name('graficas');
    
Route::get('reportes', 'ReportsController@index')
    ->name('graficas');



/* Ruta de empleados */
Route::get('employe', 'EmployesController@index')
    ->name('employe');