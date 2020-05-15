@extends('layouts.app')

@section('content')
  <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="/img/fondocine.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1> <strong>Bienvenido/Welcome</strong></h1>
                <p>Ponte comodo para disfrutar del mejor Cine</p>

              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="/img/directordecine.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h5></h5>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="/img/cineonline.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1></h1>
                <p></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


@endsection
