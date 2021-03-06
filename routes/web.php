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

//Rutas para administrar servicios
Route::resource('/admin/servicios','ServiciosController');

/*
Route::get('/admin/servicios','ServiciosController@index')->name('servicios.index');
Route::get('/admin/servicios/create','ServiciosController@create')->name('servicios.create');
Route::post('/admin/servicios','ServiciosController@store')->name('servicios.store');
Route::get('/admin/servicios/{id}','ServiciosController@show')->name('servicios.show');
Route::get('/admin/servicios/{id}','ServiciosController@edit')->name('servicios.edit');
Route::put('/admin/servicios/{id}','ServiciosController@update')->name('productos.update');
Route::delete('/admin/servicios/{id}','ServiciosController@destroy')->name('productos.destroy');
*/