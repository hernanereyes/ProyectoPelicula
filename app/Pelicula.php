<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Actor;

class Pelicula extends Model
{
    public $table = "movies";
    public $guarded = [];

    public function actores()
    {
      return $this->belongsToMany("App\Actor","actor_movie","movie_id","actor_id");
    }

    public function genero(){

    return $this->belongsTo("App\Genero","genre_id");
    }




}
