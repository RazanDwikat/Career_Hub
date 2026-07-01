<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class CoverLetter extends Model
{


    protected $fillable = [

        'user_id',

        'cv_id',

        'job_id',

        'content',

        'file_path'

    ];




    public function user()
    {

        return $this->belongsTo(User::class);

    }




    public function cv()
    {

        return $this->belongsTo(CV::class);

    }




    public function job()
    {

        return $this->belongsTo(Job::class);

    }


}