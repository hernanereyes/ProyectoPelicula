<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/favicon.ico">
    {{--Usa los estilos de bootstrap para carrousel  --}}
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
    {{--Usa los estilos de bootstrap para carrousel  --}}
    <link href="carousel.css" rel="stylesheet">
    {{--Usa los estilos de bootstrap para carrousel  --}}


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3b98d2cca3.js" crossorigin="anonymous"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
{{-- <body>
    <div id="app">
      <nav class="navbar navbar-expand navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Cine Online</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav> --}}

        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
            <div class="container-fluid">
            <div class="row">
                <div class=" col-sm-6 col-md-3">
                  <div>
                    <strong>PELIS ONLINE</strong><br>
                    Hernan Emanuel Reyes<br>
                    San Miguel de Tucuman<br>
                    Tucuman<br>
                    ARGENTINA<br>
                  </div>
                </div>
                <div class=" col-sm-6 col-md-3">
                  <div>
                    <ul class="list-unstyled">
                      <strong>Redes Sociales</strong>
                      <li><i class="fab fa-facebook-square"></i><a href="http://www.facebook.com"> Facebook</a></li>
                      <li><i class="fab fa-twitter-square"></i><a href="http://www.twitter.com"> Twitter</a></li>
                      <li><i class="fab fa-instagram-square"></i><a href="http://www.instegram.com"> Instegram</a></li>
                      <li><i class="fab fa-youtube"></i><a href="http://www.youtube.com"> YouTube</a></li>
                    </ul>
                  </div>
                </div>
                <div class=" col-sm-6 col-md-3">
                   <div>
                    <ul class="list-unstyled">
                      <strong>Contactanos </strong>
                      <div >
                        <strong>E-mail</strong><br>
                          <a href="mailto:hernan.reyes.14@gmail.com">hernan.reyes.14@gmail.com</a>
                      </div>
                      </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <ul class="list-unstyled">
                  <strong>Info</strong>
                  <p align="justify"><h6>
                 Version Demo
                  </h6></p>
                  </ul>
                </div>
              </div>
          </div>
        </body>
        </html>