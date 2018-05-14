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

Route::get('/', 'Frontal\PortadaController@portada');
Route::get('/admin', 'Admin\UserController@login');
Route::post('/admin/index', 'Admin\UserController@validarLogin');
Route::get('/user/login', 'Frontal\UserController@login');
Route::get('/{producto_slug}', 'Frontal\ProductoController@show');
