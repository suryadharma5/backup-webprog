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
        Schema::create('menfess_replies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menfess_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id');
            $table->string('reply_image')->nullable()->default(null);
            $table->longText('reply_text');
            $table->integer('like')->nullable()->default(0);
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
        Schema::dropIfExists('menfess_replies');
    }
};
