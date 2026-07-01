<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{


    public function up(): void
    {

        Schema::create('job_matches', function (Blueprint $table) {


            $table->id();



            $table->foreignId('cv_id')
                  ->constrained()
                  ->cascadeOnDelete();



            $table->foreignId('job_id')
                  ->constrained()
                  ->cascadeOnDelete();



            /*
            |--------------------------------------------------------------------------
            | AI Result
            |--------------------------------------------------------------------------
            */


            $table->integer('match_score')
                  ->nullable();



            $table->json('matched_skills')
                  ->nullable();



            $table->json('missing_skills')
                  ->nullable();



            $table->timestamps();


        });

    }




    public function down(): void
    {

        Schema::dropIfExists('job_matches');

    }

};