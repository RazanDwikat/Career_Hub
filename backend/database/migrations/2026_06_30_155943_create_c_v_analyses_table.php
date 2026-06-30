<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('c_v_analyses', function (Blueprint $table) {


    $table->id();



    $table->foreignId('cv_id')
          ->constrained()
          ->cascadeOnDelete();



    $table->integer('ats_score')
          ->default(0);



    $table->json('skills_result')
          ->nullable();



    $table->json('suggestions')
          ->nullable();



    $table->timestamps();


});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_v_analyses');
    }
};
