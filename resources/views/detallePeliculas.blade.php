@extends('layouts.app')

@section('content')

<div class="container">
      <div class="col md-5 sm-12 border ">
        <h1 class="text-center"> <b>Detalle de la Pelicula</b></h1>
        <li>Titulo:{{$peliculas->title}}</li>
        <li>Rating:{{$peliculas->rating}}</li>
        <li>Premios:{{$peliculas->awards}}</li>
        <li>Fecha de estreno:{{$peliculas->release_date}}</li>
        <li>Duración:{{$peliculas->length}}</li>
        <li>Genero:
          @if ($peliculas->genero)
          {{$peliculas->genero->name}}</li>
        @else Sin genero
          @endif
        <li>Actores:<ul>
          @foreach ($peliculas->actores as $actor)
            <li>
              {{$actor->getname()}}
            </li>
          @endforeach
        </li>
        </ul>
        </div>

</div>
  <div class="row">
    <div class="col-md-6 col-sm-12">
      </div>
    <div class="col-md-6">
      <a href="/listadopeliculas" class="btn btn-lg btn-warning float-left">Volver</a>
    </div>

  </div>

@endsection
