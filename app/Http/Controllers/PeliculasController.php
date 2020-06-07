<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

use App\Genero;

use App\Actor;

class PeliculasController extends Controller
{
        public function listar(){
        // $peliculas = Pelicula::all();
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

      public function buscar(Request $formulario)
    {
      $peliculas=Pelicula::where('title','LIKE',"%{$formulario->input('title')}%")->paginate(3);
      return view('listadoPelicula',['peliculas'=>$peliculas]);
      }

      public function guardar(Request $formulario){
        $newPelicula = new Pelicula();
        $newPelicula->title = $formulario["title"];
        $newPelicula->rating = $formulario["rating"];
        $newPelicula->awards = $formulario["awards"];
        $newPelicula->release_date = $formulario["release_date"];
        $newPelicula->save();
        return redirect("listadoPelicula");
      }

      public function borrar(Request $formulario){
        $id = $formulario["id"];

        $peliculas = Pelicula::find($id);

        $peliculas->delete();

        return redirect("listadoPelicula");

      }

      public function editar($id){
         $peliculas = Pelicula::find($id);
         $generos = Genero::all();
         return view("editarPelicula",['peliculas'=>$peliculas],['generos'=>$generos]);

      }


      public function update(Request $request, $id)
    {
        $peliculaNueva = Pelicula::findOrFail($id);
        $peliculaNueva->title = $request["title"];
        $peliculaNueva->rating = $request["rating"];
        $peliculaNueva->awards = $request["awards"];
        $peliculaNueva->release_date = $request["release_date"];
        $peliculaNueva->length = $request ["length"];
        $peliculaNueva->genre_id = $request ["genre"];
        $peliculaNueva->save();
        return redirect("listadoPelicula");
    }



}
