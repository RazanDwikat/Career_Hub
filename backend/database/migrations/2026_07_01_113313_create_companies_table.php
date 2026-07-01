<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{

    public function up(): void
    {

        Schema::create('companies', function (Blueprint $table) {


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
            | Company Information
            |--------------------------------------------------------------------------
            */

            $table->string('name');


            $table->text('description')
                  ->nullable();


            $table->string('logo')
                  ->nullable();



            /*
            |--------------------------------------------------------------------------
            | Contact Information
            |--------------------------------------------------------------------------
            */


            $table->string('website')
                  ->nullable();


            $table->string('email')
                  ->nullable();


            $table->string('phone')
                  ->nullable();



            /*
            |--------------------------------------------------------------------------
            | Location
            |--------------------------------------------------------------------------
            */

            $table->string('location')
                  ->nullable();



            /*
            |--------------------------------------------------------------------------
            | Verification
            |--------------------------------------------------------------------------
            */

            $table->boolean('is_verified')
                  ->default(false);



            $table->timestamps();

        });

    }



    public function down(): void
    {

        Schema::dropIfExists('companies');

    }

};