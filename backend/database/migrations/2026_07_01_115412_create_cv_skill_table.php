<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{

    public function up(): void
    {

        Schema::create('cv_skill', function (Blueprint $table) {


            $table->id();


            $table->foreignId('cv_id')
                  ->constrained()
                  ->cascadeOnDelete();



            $table->foreignId('skill_id')
                  ->constrained()
                  ->cascadeOnDelete();



            $table->timestamps();


        });

    }



    public function down(): void
    {

        Schema::dropIfExists('cv_skill');

    }

};