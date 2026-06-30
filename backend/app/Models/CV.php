<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class CV extends Model
{


    use HasFactory;



    protected $fillable=[

        'user_id',
        'file_path',
        'original_name',
        'is_active'

    ];



    protected $casts=[

        'is_active'=>'boolean'

    ];




    public function user()
    {

        return $this->belongsTo(User::class);

    }




    public function skills()
    {

        return $this->belongsToMany(Skill::class);

    }



    public function analysis()
    {

        return $this->hasOne(CVAnalysis::class);

    }



}