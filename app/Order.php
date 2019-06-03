<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function movies_order()
    {
      return $this->hasmany('App\movies_order','order_id');
    };
    public function customer()
    {
      return $this->belongsto('App\User','order_id');
    }

}
