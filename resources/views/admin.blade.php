@extends('layouts.app')

@section('content')

      <div class="content-fluid">
      <form class="" action="index.html" method="post">
        {{csrf_field()}}
        <div>
          @foreach ($peliculas as $pelicula)
            <div class="col-md-3">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="https://i.pinimg.com/564x/23/27/43/23274376a41c3d6e8966e50c971e7c61.jpg" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">

                        <h3 class = "card title">{{$pelicula->title}} </h3>
                        <button type="submit" class="btn btn-link"> <a href="/agregarpeliculas">Agregar</a></button>
                        <br>
                        <br>
                        <a href="borrarpelicula/{{$pelicula->id}}"class="btn btn-link">Borrar Pelicula</a>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-link"><a href="editarpelicula/{{$pelicula->id}}">Editar</a></button>
                        </p>
                      <div class="d-flex justify-content-between align-items-center">
                        </div>
                    </div>
                  </div>
                </div>
          @endforeach

        </div>
      </form>
  </div>


@endsection
