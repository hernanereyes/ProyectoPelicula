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
        $peliculas=Pelicula::all()->random(5);//muestra 5 peliculas al azar
        $peliculas2=Pelicula::paginate(5);

        return view('home', compact('peliculas','peliculas2'));
    }
}
