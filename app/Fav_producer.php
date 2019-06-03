<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fav_producer extends Model
{
    //
    public function producer()
    {
      return $this->belongsto('App\Producer');
    };
    public function user()
    {
      return $this->belongsto('App\User');
    };
}
