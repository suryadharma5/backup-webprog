<?php

use App\Models\Janin;
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
        Schema::create('janins', function (Blueprint $table) {
            $table->id();
            $table->string('image_buah');
            $table->unsignedInteger('age');
            $table->string('buah');
            $table->string('deskripsi');
            $table->unsignedDouble('weight');
            $table->unsignedDouble('height');
            $table->enum('trimester', ['1', '2', '3']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('janins');
    }
};
