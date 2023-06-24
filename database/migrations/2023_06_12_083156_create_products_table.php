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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_product');
            $table->string('type_product');
            $table->enum('rating', ['1', '2', '3', '4', '5']);
            // $table->foreignId('user_id');
            // $table->foreignId('user_image');
            // $table->foreignId('user_name');
            // $table->foreignId('user_recommend');
            // $table->foreignId('user_reviews');
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
        Schema::dropIfExists('products');
    }
};
