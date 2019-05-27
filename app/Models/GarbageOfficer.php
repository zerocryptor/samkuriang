<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;

class GarbageOfficer extends Authenticatable implements JWTSubject
{
    use Notifiable;
    /**
     * mass assignment
     */

    protected $guarded = ['id'];
    protected $guard = 'garbage_officer';

    /**
     * column database
     */

    protected $fillable = [
        'name', 'email', 'password', 'address', 'phone_number'
    ];

    /**
     * this is for validation, link rules: https://laravel.com/docs/5.8/validation
     */
    public static function rules($update = false, $id = null){
        $rules = [
            'name' => 'required|string|max:50',
            'email' => [
                'required', Rule::unique('users')->ignore($id)
            ],
            'email' => 'required|email|max:70',
            'password' => 'required|string|max:72',
            'address' => 'nullable|max:150',
            'phone_number' => 'nullable|max:16',
           // 'created_by' => 'required'
        ];
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }


    public function setPasswordAttribute($password)
    {
        if ( $password !== null & $password !== "" ) {
            $this->attributes['password'] = bcrypt($password);
        }
    }
}