<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class Job extends Model
{


    protected $fillable = [


        'company_id',

        'title',

        'description',

        'category',

        'location',

        'job_type',

        'experience_level',

        'salary_min',

        'salary_max',

        'ai_risk_score',

        'status',

        'deadline'


    ];





    protected $casts = [


        'deadline'=>'date',


        'ai_risk_score'=>'decimal:2'


    ];






    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */


    public function company()
    {

        return $this->belongsTo(Company::class);

    }





    public function skills()
    {

        return $this->belongsToMany(Skill::class);

    }



    public function applications()
    {

        return $this->hasMany(Application::class);

    }

    public function savedByUsers()
{
    return $this->belongsToMany(User::class,'saved_jobs');
}



}