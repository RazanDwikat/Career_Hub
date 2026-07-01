<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class InterviewQuestion extends Model
{


    protected $fillable = [

        'job_id',

        'question',

        'difficulty'

    ];




    public function job()
    {

        return $this->belongsTo(Job::class);

    }


}