<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies_order extends Model
{
    //7
    public function order()
    {
      return $this->belongsto('App\order');
    }
    public function movies()
    {
      return $this->belongsto('App\movies');
    }
}
