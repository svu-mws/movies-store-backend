<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fav_actor extends Model
{
    //
    public function actor()
    {
      return $this->belongsto('App\actor');
    };
    public function user()
    {
      return $this->belongsto('App\User');
    };
}
