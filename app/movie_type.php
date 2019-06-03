<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie_type extends Model
{

  protected $table = 'Movies_types';
    //
    public function types()
    {
      return $this->belongsto('App\type');
    };
    public function movies()
    {
      return $this->belongsto('App\movie');
    };
}
