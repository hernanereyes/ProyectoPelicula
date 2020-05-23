@extends('layouts.app')

@section('content')
   <nav class="navbar navbar-expand navbar-dark bg-dark">
        {{-- <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> --}}

        <div class="collapse navbar-collapse" id="navbarsExample02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
          </ul> --}}
          <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search">
          </form>
        </div>
      </nav>

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
                {{-- <form method="post" action="/detallepeliculas" enctype="multipart/form-data">
                  @csrf
                  @method("GET")
                  <div class="form-group">
                    <input type="hidden" name="id" value="{{$pelicula->id}}">
                    <input type="submit" name="" value="Ver Detalle">
                  </div>
                </form> --}}
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
