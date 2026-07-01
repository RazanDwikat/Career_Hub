<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class ImprovedResume extends Model
{


    protected $fillable = [

        'cv_id',

        'file_path',

        'content',

        'version'

    ];




    protected $casts = [

        'version'=>'integer'

    ];




    public function cv()
    {

        return $this->belongsTo(CV::class);

    }


}