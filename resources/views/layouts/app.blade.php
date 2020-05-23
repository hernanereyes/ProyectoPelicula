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
<body>
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
                    @if (Auth::user()!= NULL)
                      <ul class="navbar-nav mr-auto">
                      <!--Links  -->

                      <a class="nav-link" href="\home"> <strong>SUGERIDAS</strong> </a>
                      <a class="nav-link" href="\listadopeliculas"> <strong>LISTADO DE PELICULAS</strong> </a>
                      {{-- <a class="nav-link" href="\home"> <strong>PELICULAS POR GENERO</strong> </a> --}}

                      </ul>
                    @endif
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
          <section class="container mt-3 pt-2">
            @yield('content')
          </section>
        </main>
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
                      <strong>Encontranos</strong>
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
                </div>
          </div>
                <footer class="container">
                <p class="float-right"><a href="#">Volver arriba</a></p>
                </footer>
          </body>
        </html>
