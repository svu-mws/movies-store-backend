<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie_rate extends Model
{
    protected $table = 'movies_rates';
    //
    public  function movie()
    {
      return $this->belongsto('App\movie');
    }
}
