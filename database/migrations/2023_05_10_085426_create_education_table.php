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
        Schema::dropIfExists('education');
        Schema::create('education', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('program_id');
            $table->year('year_start');
            $table->year('year_end');
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('doctor');
            $table->foreign('program_id')->references('id')->on('program');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
};
