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
            $table->string('form_image')->default('/img/section4_photo-product.png');
            $table->float('rating')->default(0);
            $table->integer('total_review')->default(0);
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
