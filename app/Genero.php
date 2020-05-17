<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
  public $table = "genres";
  public $guarded =[];

  public function peliculas(){
  return $this-hasMany("App\Pelicula","genre_id");
}
