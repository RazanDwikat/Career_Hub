<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class CVAnalysis extends Model
{


    protected $fillable=[

        'cv_id',
        'ats_score',
        'skills_result',
        'suggestions'

    ];



    protected $casts=[

        'skills_result'=>'array',
        'suggestions'=>'array'

    ];



    public function cv()
    {

        return $this->belongsTo(CV::class);

    }


}