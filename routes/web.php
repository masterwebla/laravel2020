<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PaginasController@index');
Route::get('/nosotros', 'PaginasController@nosotros');
Route::get('/productos', 'PaginasController@productos');
Route::get('/servicios', 'PaginasController@servicios');
Route::get('/contactenos', 'PaginasController@contactenos');