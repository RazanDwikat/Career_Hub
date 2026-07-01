<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Company extends Model
{


    protected $fillable = [

        'user_id',

        'name',

        'description',

        'logo',

        'website',

        'email',

        'phone',

        'location',

        'is_verified'

    ];




    protected $casts = [

        'is_verified'=>'boolean'

    ];





    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */



    public function user()
    {

        return $this->belongsTo(User::class);

    }



    public function jobs()
    {

        return $this->hasMany(Job::class);

    }


}