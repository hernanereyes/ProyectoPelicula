@extends('layouts.app')

@section('content')
    <main role="main">
      <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="row">
            <div class="col-md-12">
              <h4><strong>Ultimas Pelis subidas</strong></h4>
            </div>
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
        </div>

        <div class="row">
          <div class="col-md-12">
            <h4><strong>Chequea las ultimas pelis subidas</strong></h4>
          </div>
        @foreach ($peliculas2 as $pelicula)
          <div class="col-md-3">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="https://i.pinimg.com/236x/77/d7/a7/77d7a7cecf750fb5a23fcab4c69d3f01.jpg" alt="Card image cap">
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
                      <small class="text-muted">  ** NUEVO **</small>
                    </div>
                  </div>
                </div>
              </div>
        @endforeach
        {{-- GENERA EL PAGINADO --}}
        {{$peliculas2->links()}}
        </div>
        </div>
      </div>
    </div>
  </main>


@endsection
