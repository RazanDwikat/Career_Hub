<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;



class User extends Authenticatable
{

    use HasApiTokens;


    protected $fillable = [

        'name',
        'email',
        'password',
        'role',
        'phone',
        'location',
        'bio',
        'is_active'

    ];



    protected $hidden = [

        'password',
        'remember_token'

    ];



    protected $casts = [

        'is_active'=>'boolean'

    ];


}