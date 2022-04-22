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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('brand_id')->nullable();
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('status',6)->default('False');
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('seri')->nullable();
            $table->string('yakit_turu')->nullable();
            $table->string('vites')->nullable();
            $table->integer('km')->nullable();
            $table->integer('kapi')->nullable();
            $table->string('renk')->nullable();
            $table->string('durum')->nullable();
            $table->integer('price')->nullable();
            $table->integer('yil')->nullable();
            $table->string('detail')->nullable();
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
        Schema::dropIfExists('cars');
    }
};
