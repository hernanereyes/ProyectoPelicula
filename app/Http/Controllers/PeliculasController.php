<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

use App\Genero;

use App\Actor;

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

      public function buscar(Request $formulario)
    {
      $peliculas=Pelicula::where('title','LIKE',"%{$formulario->input('title')}%")->paginate(3);
      return view('listadoPelicula',['peliculas'=>$peliculas]);
      }

      public function guardar(Request $formulario){

        $formulario->validate([
              'title' => 'required',
              'rating' => 'required',
              'awards' => 'required',
              'release_date' => 'required',
              'length' => 'required',
              ]);

        $newPelicula = new Pelicula();
        $newPelicula->title = $formulario["title"];
        $newPelicula->rating = $formulario["rating"];
        $newPelicula->awards = $formulario["awards"];
        $newPelicula->release_date = $formulario["release_date"];
        $newPelicula->length = $formulario ["length"];
        $newPelicula->save();
        return redirect("/listadopeliculas");


      }

      public function borrar(Request $formulario){
        $id = $formulario["id"];

        $peliculas = Pelicula::find($id);

        $peliculas->delete();

        return redirect("/listadopeliculas");

      }

      public function editar($id){
         $peliculas = Pelicula::find($id);
         $generos = Genero::all();
         return view("editarPelicula",['peliculas'=>$peliculas],['generos'=>$generos]);

      }


      public function update(Request $request, $id)
    {
      $request->validate([
            'title' => 'required',
            'rating' => 'required',
            'awards' => 'required',
            'release_date' => 'required',
            'length' => 'required',
            'genre_id' => 'required',
            ]);
        $peliculaNueva = Pelicula::findOrFail($id);
        $peliculaNueva->title = $request["title"];
        $peliculaNueva->rating = $request["rating"];
        $peliculaNueva->awards = $request["awards"];
        $peliculaNueva->release_date = $request["release_date"];
        $peliculaNueva->length = $request ["length"];
        $peliculaNueva->genre_id = $request ["genre"];
        $peliculaNueva->save();
        return redirect("/listadopeliculas");
    }

    public function listadoAPI(){
      $peliculas = Pelicula::all();

      return json_encode($peliculas);

    }

}
