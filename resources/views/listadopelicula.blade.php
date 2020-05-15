@extends('layouts.app')

@section('content')


  @foreach ($peliculas as $pelicula)
    <div class="col-md-3">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="https://i.pinimg.com/236x/4e/27/8d/4e278d8db6710b3735140c5dcf4f3f71.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">
                <h3>{{$pelicula->title}}</h3>
                <h3>{{$pelicula->genere}}</h3>
                <h3>{{$pelicula->rating}}</h3>
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Sinopsis</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Actores</button>
                </div>
                <small class="text-muted"> </small>
              </div>
            </div>
          </div>
        </div>
@endforeach

@endsection
