<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    //
    public  function comments()
    {
      return $this->hasmany('App\comment');
    }
    public  function types()
    {
      return $this->hasmany('App\movie_type');
    }
    public  function rates()
    {
      return $this->hasmany('App\Movie_rate');
    }
    public  function movies_actors()
    {
      return $this->hasmany('App\movies_actor');
    }
    public  function produers()
    {
      return $this->belongsto('App\prodcer');
    }

}
