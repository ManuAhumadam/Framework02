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

Route::resource('/', 'SucursalesController');

Route::resource('/categorias', CategoriasController::class);

Route::resource('/sucursales', SucursalesController::class);

Route::resource('/productos', ProductosController::class);
Route::get('/productos/{id}', 'ProductosController@index1');//LISTAR LOS PERSONAJES


Route::get('/contact', 'ContactController@index');//VISTA PRINCIPAL
Route::post('/contact', ['uses' => 'ContactController@send', 'as' => 'sendContact']);//VALIDADOR INPUT

Route::get('/help', 'HelpController@index');