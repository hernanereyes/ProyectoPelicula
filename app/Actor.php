<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  public $table = "actors";
  public $guarded =[];

  public function name()
  {
  return $this->first_name. " " . $this->last_name;
  }
  public function peliculas(){
  return $this->belongsTo("App\Pelicula","actor_movie","actor_id","movie_id");
  }
}
