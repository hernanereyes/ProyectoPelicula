@extends('layouts.app')

@section('content')
    <main role="main">
      <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="row">
            <div class="col-md-12">
              <h4><strong>Peliculas Aleatorias</strong></h4>
            </div>
          @foreach ($peliculas as $pelicula)
            <div class="col-md-3">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="https://i.pinimg.com/564x/23/27/43/23274376a41c3d6e8966e50c971e7c61.jpg" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">
                        <h3 class="card title">{{$pelicula->title}}</h3>
                        <p class ="card-title">Rating {{$pelicula->rating}}</p>
                        <a href="detallepeliculas/{{$pelicula->id}}"class="btn btn-primary">Ver Detalles</a>
                      </p>
                      </div>
                  </div>
                </div>
          @endforeach
        </div>

        <div class="row">
          <div class="col-md-12">
            <h4><strong>Ultimas Peliculas</strong></h4>
          </div>
        @foreach ($ultimas as $ultima)
          <div class="col-md-3">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="https://i.pinimg.com/564x/23/27/43/23274376a41c3d6e8966e50c971e7c61.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">
                      <h3 class="card title">{{$ultima->title}}</h3>
                      <p class ="card-title">Rating {{$ultima->rating}}</p>
                      <a href="detallepeliculas/{{$ultima->id}}"class="btn btn-primary">Ver Detalles</a>
                      </p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection
