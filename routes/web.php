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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//LISTADO DE PELICULAS

Route::get('/listadopeliculas', 'PeliculasController@listar');

//DETALLE DE PELICULAS

Route::get('/detallepeliculas/{id}', 'PeliculasController@show')->name("detallepeliculas");

//BUSCAR PELICULAS

Route::get('/buscar', 'PeliculasController@buscar');


//AGREGAR PELICULAS

Route::get('/agregarpeliculas','PeliculasController@agregar')->middleware('llave');

Route::post('/agregarpeliculas','PeliculasController@guardar')->middleware('llave');

//MODIFICACION PELICULAS

Route::get('/editarpelicula/{id}','PeliculasController@editar')->middleware('llave');

Route::put('/actualizarPelicula/{id}','PeliculasController@update')->middleware('llave');

//ADMIN

Route::get('/admin','HomeController@admin')->middleware('llave');

//BORRAR PELICULA

Route::get('/borrarpelicula/{id}','PeliculasController@borrar')->middleware('llave');
