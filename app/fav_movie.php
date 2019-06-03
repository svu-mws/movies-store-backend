<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fav_movie extends Model
{
    //
    protected $table = 'fav_movies';
    public function movie()
    {
      return $this->belongsto('App\movie');
    };
    public function user()
    {
      return $this->belongsto('App\User');
    };
}
