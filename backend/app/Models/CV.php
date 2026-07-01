<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class CV extends Model
{


    protected $fillable = [

        'user_id',

        'file_path',

        'original_name',

        'version',

        'status'

    ];





    protected $casts = [

        'version'=>'integer'

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





    public function skills()
    {

        return $this->belongsToMany(Skill::class);

    }





    public function analyses()
    {

        return $this->hasMany(CVAnalysis::class);

    }





    public function improvedResumes()
    {

        return $this->hasMany(ImprovedResume::class);

    }



}