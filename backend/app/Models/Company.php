<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Company extends Model
{


    use HasFactory;



    protected $fillable = [

        'user_id',
        'name',
        'description',
        'website',
        'logo',
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


    public function owner()
    {

        return $this->belongsTo(User::class,'user_id');

    }




    public function jobs()
    {

        return $this->hasMany(Job::class);

    }


}