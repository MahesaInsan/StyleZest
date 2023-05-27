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
        Schema::create('transaction_has_clothes', function (Blueprint $table) {
            $table->id();
            $table->integer('count');
            $table->integer('totPrice');

            $table->unsignedBigInteger('transactionId');
            $table->foreign('transactionId')->references('id')->on('transaction_details')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('clothesId');
            $table->foreign('clothesId')->references('id')->on('clothes')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('sizeId');
            $table->foreign('sizeId')->references('id')->on('sizes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('transaction_has_clothes');
    }
};
