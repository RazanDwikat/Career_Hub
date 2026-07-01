<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{


    public function up(): void
    {

        Schema::create('applications', function (Blueprint $table) {


            $table->id();



            /*
            |--------------------------------------------------------------------------
            | Relations
            |--------------------------------------------------------------------------
            */


            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();



            $table->foreignId('job_id')
                  ->constrained()
                  ->cascadeOnDelete();



            $table->foreignId('cv_id')
                  ->constrained()
                  ->cascadeOnDelete();




            /*
            |--------------------------------------------------------------------------
            | Application Status
            |--------------------------------------------------------------------------
            */


            $table->enum('status',[

                'pending',
                'accepted',
                'rejected'

            ])
            ->default('pending');




            $table->text('message')
                  ->nullable();



            $table->timestamps();


        });

    }



    public function down(): void
    {

        Schema::dropIfExists('applications');

    }

};