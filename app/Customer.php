<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable implements JWTSubject
{
    use Notifiable;
    /**
     * mass assignment
     */

    protected $guarded = ['id'];


    /**
     * column database
     */

    protected $fillable = [
        'name', 'email', 'password', 'address', 'no_telp'
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
