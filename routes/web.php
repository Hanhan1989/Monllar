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
Route::post('/admin/index', 'Admin\UserController@validarLogin')->middleware('auth');
Route::get('/admin/portada', 'Admin\PortadaController@index')->middleware('auth');


Route::get('/user/login', 'Frontal\UserController@login');
Route::get('/user/registro', 'Frontal\UserController@registrarse')->middleware('auth');

Route::get('/producto/{producto_id}', 'Frontal\ProductoController@show');
Route::get('/producto/lista/{id_categoria}', 'Frontal\ProductoController@listar');
Route::get('/producto/json/{q}', 'Frontal\ProductoController@showProductoJson');

Route::resource('admin/producto', 'Admin\ProductoController')->middleware('auth');
Route::resource('admin/categoria', 'Admin\CategoriaController')->middleware('auth');
Route::resource('admin/catalogo', 'Admin\CatalogoController')->middleware('auth');
Route::resource('admin/atributo', 'Admin\AtributoController')->middleware('auth');
Route::resource('admin/atributovalor', 'Admin\AtributoValorController')->middleware('auth');
Route::resource('admin/user', 'Admin\UserController')->middleware('auth');
Route::resource('admin/perfil', 'Admin\PerfilController')->middleware('auth');



Auth::routes();


Route::get('/styletile', function () {
    return view('frontal.estaticas.styletile');
});

Route::get('/politica_de_privacidad', function () {
    return view('frontal.estaticas.politica_privacidad');
});

Route::get('/ubicacion', function () {
    return view('frontal.estaticas.ubicacion');
});

Route::get('/team', function () {
    return view('frontal.estaticas.team');
});

Route::get('/terms', function () {
    return view('frontal.estaticas.terms');
});
Route::get('/contact', function () {
    return view('frontal.estaticas.contact');
});
Route::get('/conocenos', function () {
    return view('frontal.estaticas.que_somos');
});