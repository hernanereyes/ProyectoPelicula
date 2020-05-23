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

Route::get('/listadopeliculas', 'PeliculasController@listar');// Consulta(lista)

//DETALLE DE PELICULAS

Route::get('/detallepeliculas/{id}', 'PeliculasController@show')->name("detallepeliculas"); //Consulta(detalle)

//BUSCAR PELICULAS

Route::get('/buscarpeliculas', 'PeliculasController@buscar');


//AGREGAR PELICULAS

Route::get('/agregarpeliculas','PeliculasController@agregar');

Route::post('/agregarpeliculas','PeliculasController@guardar');

//

Route::post('/borrarpeliculas','PeliculasController@borrar');

Route::post('/actores','ActoresControllerl@crear'); //Alta

Route::patch('/peliculas{id}', 'PeliculasController@editar'); //Modificacion

Route::delete('/actores{id}', 'ActorController@eliminar'); //Baja
