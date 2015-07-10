<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateBarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('neighborhood');
            $table->string('category');
            $table->string('imagePath');
            $table->boolean('phone');
            $table->string('email');
            $table->time('monOpen');
            $table->time('monClose');
            $table->time('tueOpen');
            $table->time('tueClose');
            $table->time('wenOpen');
            $table->time('wenClose');
            $table->time('thuOpen');
            $table->time('thuClose');
            $table->time('friOpen');
            $table->time('friClose');
            $table->time('satOpen');
            $table->time('satClose');
            $table->time('sunOpen');
            $table->time('sunClose');
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
        //
        Schema::drop('bars');
    }
}
