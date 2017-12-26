<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'dob', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function addresses(){
        return $this->hasManyThrough('App\Models\Address', 'App\Models\UserAddress', 'user_id', 'id', 'id');
    }


    public function phoneNumbers(){
        return $this->hasManyThrough('App\Models\PhoneNumber', 'App\Models\UserPhoneNumber', 'user_id', 'id');
    }
}
