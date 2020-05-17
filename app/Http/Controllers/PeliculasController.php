<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

class PeliculasController extends Controller
{
      public function listar(){
      $peliculas=Pelicula::all();
      return view('listadopelicula',compact('peliculas'));

      }
      // public function detalle($id){
      //   $id=Pelicula::all();
      //   return view('detallepelicula',compact('peliculas'));
      // }


}
