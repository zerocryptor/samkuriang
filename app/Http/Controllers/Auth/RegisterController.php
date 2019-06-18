<?php

namespace App\Http\Controllers\Auth;

use App\Models\GarbageOfficer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
    protected $redirectTo = '/garbage_officer';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:garbage_officer');
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
            'namapetugas' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:garbage_officers',
            // 'password' => 'required|string|min:6|confirmed',
            // 'position' => 'required|string',
            // 'phone_number' => 'required|string',
            // 'latitude' => 'required',
            // 'longitude' => 'required',
            // 'namatempat' => 'required|string'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\GarbageOfficer
     */
    protected function create(array $data)
    {
        return GarbageOfficer::create([
            'name'      => $data['namapetugas'],
            'email'     => $data['email'],
            'password'  => bcrypt($data['password']),
            'address' => $data['position'],
            'phone_number' => $data['phone_number'],
            'lat' => $data['latitude'],
            'lng' => $data['longitude'],
            'place_name' => $data['namatempat']
        ]);
    }
}
