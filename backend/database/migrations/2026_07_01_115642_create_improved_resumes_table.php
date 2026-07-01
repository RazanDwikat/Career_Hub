<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{


    public function up(): void
    {

        Schema::create('improved_resumes', function (Blueprint $table) {


            $table->id();



            $table->foreignId('cv_id')
                  ->constrained()
                  ->cascadeOnDelete();



            /*
            |--------------------------------------------------------------------------
            | AI Generated Resume
            |--------------------------------------------------------------------------
            */


            $table->string('file_path')
                  ->nullable();



            $table->longText('content')
                  ->nullable();



            $table->integer('version')
                  ->default(1);



            $table->timestamps();


        });

    }



    public function down(): void
    {

        Schema::dropIfExists('improved_resumes');

    }

};