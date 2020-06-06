<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PaginasController@index')->name('inicio');
Route::get('/nosotros', 'PaginasController@nosotros')->name('nosotros');
Route::get('/productos', 'PaginasController@productos')->name('productos');
Route::get('/servicios', 'PaginasController@servicios')->name('servicios');
Route::get('/contactenos', 'PaginasController@contactenos')->name('contactenos');

//Rutas para administrar productos
Route::get('/admin/productos', 'ProductosController@listar')->name('productos-listar');
Route::get('/admin/productos/crear', 'ProductosController@crear')->name('productos-crear');
Route::post('/admin/productos/guardar', 'ProductosController@guardar')->name('productos-guardar');
Route::get('/admin/productos/editar/{id}', 'ProductosController@editar')->name('productos-editar');
Route::put('/admin/productos/actualizar/{id}', 'ProductosController@actualizar')->name('productos-actualizar');
Route::delete('/admin/productos/borrar/{id}', 'ProductosController@borrar')->name('productos-borrar');