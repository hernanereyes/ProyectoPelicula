<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelicula;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $peliculas = Pelicula::all()->random(5);
      $ultimas = Pelicula::all()->sortByDesc("created_at")->take(5);
      return view('home',['peliculas'=>$peliculas,'ultimas'=>$ultimas]);


    }
}
