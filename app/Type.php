<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  protected $table = 'typess';
  public function order()
  {
    return $this->hasmany('App\movie_type','type_id');
  }

    //
}
