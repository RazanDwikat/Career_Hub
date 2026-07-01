<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{


    public function up(): void
    {

        Schema::create('jobs', function (Blueprint $table) {


            $table->id();



            /*
            |--------------------------------------------------------------------------
            | Company Owner
            |--------------------------------------------------------------------------
            */


            $table->foreignId('company_id')
                  ->constrained()
                  ->cascadeOnDelete();



            /*
            |--------------------------------------------------------------------------
            | Job Information
            |--------------------------------------------------------------------------
            */


            $table->string('title');


            $table->text('description');



            $table->string('category')
                  ->nullable();



            $table->string('location')
                  ->nullable();



            $table->enum('job_type', [

                'full_time',
                'part_time',
                'remote',
                'internship'

            ])
            ->default('full_time');



            $table->enum('experience_level', [

                'junior',
                'mid',
                'senior'

            ])
            ->default('junior');



            /*
            |--------------------------------------------------------------------------
            | Salary
            |--------------------------------------------------------------------------
            */


            $table->integer('salary_min')
                  ->nullable();


            $table->integer('salary_max')
                  ->nullable();



            /*
            |--------------------------------------------------------------------------
            | AI Detection
            |--------------------------------------------------------------------------
            */


            $table->decimal('ai_risk_score',5,2)
                  ->default(0);



            $table->enum('status',[

                'pending',
                'published',
                'rejected'

            ])
            ->default('pending');



            /*
            |--------------------------------------------------------------------------
            | Other
            |--------------------------------------------------------------------------
            */


            $table->date('deadline')
                  ->nullable();



            $table->timestamps();


        });

    }





    public function down(): void
    {

        Schema::dropIfExists('jobs');

    }


};