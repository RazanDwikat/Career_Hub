<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class User extends Authenticatable
{

    use HasApiTokens, HasFactory;


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

        'is_active' => 'boolean'

    ];



    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */


    public function companies()
    {

        return $this->hasMany(Company::class);

    }



    public function jobs()
    {

        return $this->hasMany(Job::class);

    }

    public function cvs()
    {

        return $this->hasMany(CV::class);

    }



    public function applications()
    {

        return $this->hasMany(Application::class);

    }

}