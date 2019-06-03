<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','Birth_day','relation_status','age','Education_level','gender','homeonership','internetconnection','material_status','movie_selector','num_bathrooms','num_bedrooms','num_cars','num_cheildren','num_Tvs','PPV_freq','buying_freq','format'
        ,'renting_freq','Viewing_freq','Threater_freq','Tv_movie_freq','Tv_signal'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public  function hobbies()
    {
      return $this->hasmany('App\hobby','user_id');
    }
    public  function Fav_producers()
    {
      return $this->hasmany('App\Fav_producer','user_id');
    }
    public  function orders()
    {
      return $this->hasmany('App\order','user_id');
    }
    public  function comments()
    {
      return $this->hasmany('App\comment');
    }
    public  function rates()
    {
      return $this->hasmany('App\rate','user_id');
    }
    public  function Fav_movies()
    {
      return $this->hasmany('App\Fav_movie','user_id');
    }
    public  function fav_actors()
    {
      return $this->hasmany('App\fav_actor','user_id');
    }
    public  function technologies()
    {
      return $this->hasmany('App\tachnology','user_id');
    }
    public  function channels()
    {
      return $this->hasmany('App\channel','user_id');
    }
    public  function criteria()
    {
      return $this->hasmany('App\criterion','user_id');
    }
    public function generateToken()
   {
       $this->api_token = str_random(60);
       $this->save();

       return $this->api_token;
   }
}
