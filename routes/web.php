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
Route::get('/admin/portada', 'Admin\PortadaController@index');


Route::get('/user/login', 'Frontal\UserController@login');
Route::get('/user/registro', 'Frontal\UserController@registrarse');
Route::get('/producto/{producto_id}', 'Frontal\ProductoController@show');
Route::get('/producto/lista/{id_categoria}', 'Frontal\ProductoController@listar');

Route::resource('admin/producto', 'Admin\ProductoController');
Route::resource('admin/categoria', 'Admin\CategoriaController');
Route::resource('admin/catalogo', 'Admin\CatalogoController');
Route::resource('admin/atributo', 'Admin\AtributoController');


Auth::routes();


Route::get('/politica_de_privacidad', function () {
    return view('frontal.estaticas.politica_privacidad');
});

Route::get('/ubicacion', function () {
    return view('frontal.estaticas.ubicacion');
});