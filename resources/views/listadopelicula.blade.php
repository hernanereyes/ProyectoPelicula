@extends('layouts.app')

@section('content')
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <div class="col-md-6">
            <form action ="\buscar"method="get" >

              <div class="input-group">
                <input type="text" name="title" class="form-control" placeholder="Buscar peliculas">
                <div class="input-group-append">
                  <button class="btn btn-secondary"type="submit">
                    Buscar
                  </button>
                </div>
              </div>
           </form>
          </div>
        </div>
      </div>

  <div class="row">
    <div class="col-md-12">
      <h4><strong>Listado de Peliculas</strong></h4>
    </div>
  @foreach ($peliculas as $pelicula)
    <div class="col-md-3">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="https://i.pinimg.com/564x/23/27/43/23274376a41c3d6e8966e50c971e7c61.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">

                <h3 class = "card title">{{($pelicula->title)}} </h3>
                <a href="detallepeliculas/{{$pelicula->id}}"class="btn btn-primary">Ver Detalles</a>
                </p>
              <div class="d-flex justify-content-between align-items-center">
                </div>
            </div>
          </div>
        </div>
  @endforeach
    </div>
      <div class="">
      {{$peliculas->links()}}
    </div>
@endsection
