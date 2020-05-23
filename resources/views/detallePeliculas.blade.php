@extends('layouts.app')

@section('content')

<div class="container">
  {{-- <div class="row"> --}}
    {{-- <div class="col md-5 sm-12 border ">
        <h1 class="text-center"> <b>Pelicula N°:  {{$peliculas->id}}</b></h1>
        <div class="row border pt-2">
            <ul>
              <h5><img src="/img/cine.png" alt="" height=""></h5>
              <a href="#"></a>
              <hr>
          </ul>
        </div>
    </div> --}}
    <div class="col md-5 sm-12 border ">
        <h1 class="text-center"> <b>Detalle de la Pelicula</b></h1>
        <li>Titulo:{{$peliculas->title}}</li>
        <li>Rating:{{$peliculas->rating}}</li>
        <li>Premios:{{$peliculas->awards}}</li>
        <li>Fecha de estreno:{{$peliculas->release_date}}</li>
        <li>Duración:{{$peliculas->length}}</li>
        <li>Genero:{{$peliculas->genero->name}}</li>
        <li>Actores:<ul>
          @foreach ($peliculas->actores as $actor)
            <li>
              {{$actor->getname()}}
            </li>
          @endforeach
        </li>
        </ul>
        </div>
  {{-- </div> --}}
</div>
@endsection
