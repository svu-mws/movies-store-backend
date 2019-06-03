<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'Birth_day' =>$data['Birth_day'],
            'age' =>$data['age'],
            'Education_level' =>$data['Education_level'],
            'relation_status' =>$data['relation_status'],
            'gender' =>$data['gender'],
            'homeonership' =>$data['homeonership'],
            'internetconnection' =>$data['internetconnection'],
            'material_status' =>$data['material_status'],
            'movie_selector' =>$data['movie_selector'],
            'num_bathrooms' =>$data['num_bathrooms'],
            'num_bedrooms' =>$data['num_bedrooms'],
            'num_cars' =>$data['num_cars'],
            'format' =>$data['format'],
            'renting_freq' =>$data['renting_freq'],

            'num_cheildren' =>$data['num_cheildren'],
            'num_Tvs' =>$data['num_Tvs'],
            'PPV_freq' =>$data['PPV_freq'],
            'buying_freq' =>$data['buying_freq'],
              'Viewing_freq' =>$data['Viewing_freq'],
                'Threater_freq' =>$data['Threater_freq'],
                  'Tv_movie_freq' =>$data['Tv_movie_freq'],
                    'Tv_signal' =>$data['Tv_signal']




        ]);
    }
}
