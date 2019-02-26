<?php

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

Route::get('/', 'CompraController@list')->name('compra.list');

Route::get('/pelicula/', 'PeliculaController@index')->name('pelicula.index');
Route::get('/pelicula/{genero}', 'PeliculaController@show')->name('pelicula.show');

