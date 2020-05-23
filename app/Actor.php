<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pelicula;

class Actor extends Model
{
  public $id = "id";
  public $table = "actors";
  public $guarded =[];

  public function peliculas(){
  return $this->belongsToMany("App\Pelicula","actor_movie","actor_id","movie_id");
  }

  public function getname(){
    return $this->first_name. " ".$this->last_name; 

  }
}
