<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class JobMatch extends Model
{


    protected $fillable = [

        'cv_id',

        'job_id',

        'match_score',

        'matched_skills',

        'missing_skills'

    ];




    protected $casts = [

        'matched_skills'=>'array',

        'missing_skills'=>'array'

    ];




    public function cv()
    {

        return $this->belongsTo(CV::class);

    }




    public function job()
    {

        return $this->belongsTo(Job::class);

    }


}