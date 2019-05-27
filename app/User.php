<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable 
{
    use Notifiable;
    /**
     * mass assignment
     */

    protected $guarded = ['id'];
    protected $guard = 'user';

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
            //'created_by' => 'required'
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

}

