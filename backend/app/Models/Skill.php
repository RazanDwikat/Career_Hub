<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class Skill extends Model
{


    protected $fillable = [

        'name',

        'category'

    ];



    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */



    public function jobs()
    {

        return $this->belongsToMany(Job::class);

    }



    public function cvs()
    {

        return $this->belongsToMany(CV::class);

    }


}