<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;



class Job extends Model
{


    use HasFactory, SoftDeletes;



    protected $fillable = [

        'user_id',
        'company_id',
        'title',
        'description',
        'location',
        'job_type',
        'experience',
        'salary',
        'deadline',
        'status',
        'risk_score'

    ];




    protected $casts = [

        'deadline'=>'date'

    ];





    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */



    public function employer()
    {

        return $this->belongsTo(User::class,'user_id');

    }


    public function skills()
    {

         return $this->belongsToMany(Skill::class);

    }
    public function company()
    {

        return $this->belongsTo(Company::class);

    }

    public function applications()
    {

        return $this->hasMany(Application::class);

    }


}