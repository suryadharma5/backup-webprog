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
        Schema::dropIfExists('doctor');

        Schema::defaultStringLength(191);
        Schema::create('doctor', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('hospital_id');
            $table->unsignedBigInteger('title_id');
            $table->string('doctor_name');
            $table->text('doctor_profile');
            $table->integer('year_experience');
            $table->timestamps();

            $table->foreign('title_id')->references('id')->on('title');
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
        Schema::dropIfExists('doctor');
    }
};
