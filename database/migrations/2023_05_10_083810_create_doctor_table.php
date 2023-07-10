<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('hospital_id');
            $table->json('hari_praktek')->nullable();
            $table->integer('jam_awal')->nullable();
            $table->integer('jam_akhir')->nullable();
            $table->integer('title_id')->nullable();
            $table->string('doctor_name');
            $table->text('doctor_profile');
            $table->integer('year_experience');
            $table->timestamps();

            // $table->foreign('title_id')->references('id')->on('title');
            $table->foreign('hospital_id')->references('id')->on('rumah_sakits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor');
    }
};
