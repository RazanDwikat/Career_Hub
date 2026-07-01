<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{


    public function up(): void
    {

        Schema::create('cvs', function (Blueprint $table) {


            $table->id();



            /*
            |--------------------------------------------------------------------------
            | Owner
            |--------------------------------------------------------------------------
            */


            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();



            /*
            |--------------------------------------------------------------------------
            | CV Information
            |--------------------------------------------------------------------------
            */


            $table->string('file_path');


            $table->string('original_name');



            $table->integer('version')
                  ->default(1);



            /*
            |--------------------------------------------------------------------------
            | Status
            |--------------------------------------------------------------------------
            */


            $table->enum('status',[

                'uploaded',
                'analyzed'

            ])
            ->default('uploaded');



            $table->timestamps();


        });

    }




    public function down(): void
    {

        Schema::dropIfExists('cvs');

    }


};