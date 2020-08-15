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

//Route::get('/', function () {
//});

//Route::get('/index','ClienteController@index');

Route::resource('Empleado','EmpleadoController');
Route::resource('Cliente','ClienteController');
Route::resource('Proveedor','ProveedorController');
Route::resource('Flor','FlorController');
Route::resource('Envio','EnvioController');
Route::resource('Pedido','PedidoController');

