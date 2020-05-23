<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

class PeliculasController extends Controller
{
        public function listar(){
        $peliculas = Pelicula::paginate(5);
        return view('listadoPelicula',['peliculas'=>$peliculas]);

      }


      public function show(Request $request){

      $id = $request['id'];
      $peliculas = Pelicula::find($id);
      return view('detallepeliculas',['peliculas'=>$peliculas]);

      }

      public function agregar(){


        return view("agregarpeliculas");

      }

      public function buscar(Request $request){

        $peliculas = $request->input('peliculas');
        $peliculas = Pelicula::where('title', 'LIKE', "%(peliculas)%")->paginate(3);
        return view('listadoPeliculas',['pelicula'->$peliculas]);

      }




      public function guardar(Request $formulario){
        $newPelicula = new Pelicula();
        $newPelicula->title = $formulario["title"];
        $newPelicula->rating = $formulario["rating"];
        $newPelicula->awards = $formulario["awards"];
        $newPelicula->release_date = $formulario["release_date"];
        $newPelicula->save();
      }

      public function borrar(Request $formulario){
        $id = $formulario["id"];

        $peliculas = Pelicula::find($id);

        $peliculas->delete();

        return view("borrarpeliculas",['peliculas'=>$peliculas]);

      }
}
