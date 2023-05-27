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
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('clothesName');
            $table->string('clothesDescription');
            $table->integer('stock');
            $table->integer('price');
            
            $table->unsignedBigInteger('categoryId');
            $table->foreign('categoryId')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('genderId');
            $table->foreign('genderId')->references('id')->on('genders')->onDelete('cascade')->onUpdate('cascade');
            // $table->unsignedBigInteger('sizeId');
            // $table->foreign('sizeId')->references('id')->on('sizes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothes');
    }
};
