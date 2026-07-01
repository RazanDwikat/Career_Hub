<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{


    public function up(): void
    {

        Schema::create('cv_analyses', function (Blueprint $table) {


            $table->id();



            $table->foreignId('cv_id')
                  ->constrained()
                  ->cascadeOnDelete();



            /*
            |--------------------------------------------------------------------------
            | AI Scores
            |--------------------------------------------------------------------------
            */


            $table->integer('ats_score')
                  ->nullable();



            $table->integer('grammar_score')
                  ->nullable();



            $table->string('formatting_score')
                  ->nullable();



            /*
            |--------------------------------------------------------------------------
            | AI Result
            |--------------------------------------------------------------------------
            */


            $table->json('skills_found')
                  ->nullable();



            $table->json('suggestions')
                  ->nullable();



            $table->timestamps();


        });

    }




    public function down(): void
    {

        Schema::dropIfExists('cv_analyses');

    }

};