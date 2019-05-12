<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     * mass assignment
     */

    protected $guarded = ['id'];


    /**
     * custom protected
     */

    protected $fillable = [
        'name', 'email', 'password', 'address', 'no_telp'
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
            'no_telp' => 'nullable|max:15',
            'created_by' => 'required'
        ];
    }
}
