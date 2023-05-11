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
        Schema::create('clothes_has__colors', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('clothesId');
            $table->foreign('clothesId')->references('id')->on('clothes')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('colorId');
            $table->foreign('colorId')->references('id')->on('colors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothes_has__colors');
    }
};
