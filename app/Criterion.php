<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criterion extends Model
{
  protected $table = 'criteria';
    //
  
    public function user()
    {
      return $this->belongsto('App\User');
    };
}
