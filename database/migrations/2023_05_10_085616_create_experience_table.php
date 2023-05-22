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
        Schema::dropIfExists('experience');
        Schema::create('experience', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('hospital_id');
            $table->string('job');
            $table->year('year_start');
            $table->year('year_end');
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('doctor');
            $table->foreign('hospital_id')->references('id')->on('rumah_sakits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experience');
    }
};
