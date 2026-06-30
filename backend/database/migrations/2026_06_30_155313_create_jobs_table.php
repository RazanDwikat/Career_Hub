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



            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();


            $table->foreignId('company_id')
                  ->constrained()
                  ->cascadeOnDelete();




            $table->string('title');



            $table->text('description');



            $table->string('location')
                  ->nullable();




            $table->enum('job_type',[

                'full_time',
                'part_time',
                'remote',
                'internship'

            ]);





            $table->string('experience')
                  ->nullable();




            $table->decimal('salary',10,2)
                  ->nullable();




            $table->date('deadline')
                  ->nullable();





            $table->enum('status',[


                'pending',
                'published',
                'rejected'


            ])
            ->default('pending');





            // AI Fake detection

            $table->integer('risk_score')
                  ->default(0);





            $table->timestamps();



            $table->softDeletes();


        });



    }



    public function down(): void
    {

        Schema::dropIfExists('jobs');

    }


};