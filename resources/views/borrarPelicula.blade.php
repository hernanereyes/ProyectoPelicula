@extends('layouts.app')

@section('content')
  
<h1><strong>Detalle de Peliculas</strong></h1>
<h2> Usted eligio la Pelicula {{$peliculas->title}}</h2>

<form class="" action="/borrarPelicula" method="post">
  {{csrf_field()}}
  <input type="hidden" name="id" value="{{$peliculas->id}}">
  <br>
  <input type="submit" name="" value="Borrar Pelicula">
</form>


@endsection
