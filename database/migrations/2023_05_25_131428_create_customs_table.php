<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Custom;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customs', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('maincolor');
            $table->string('bgcolor');
            $table->string('sidebar');
            $table->string('buttoncolor');
            $table->string('logo');
            $table->string('bannerimg');
            $table->string('loginimg');
        });

        Custom::insert([
            'company' => 'Company Name',
            'maincolor' => '#FFFFFF',
            'bgcolor' => '#FFFFFF',
            'sidebar' => '#FFFFFF',
            'buttoncolor' => '#0000FF',
            'logo' => 'init',
            'bannerimg' => 'init',
            'loginimg' => 'init'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customs');
    }
};
