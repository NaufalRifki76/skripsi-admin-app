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
        Schema::create('rent_hours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('venue_id');
            $table->unsignedBigInteger('field_id');
            $table->unsignedBigInteger('order_id');
            $table->date('order_date');
            $table->integer('up00')->nullable();
            $table->integer('up01')->nullable();
            $table->integer('up02')->nullable();
            $table->integer('up03')->nullable();
            $table->integer('up04')->nullable();
            $table->integer('up05')->nullable();
            $table->integer('up06')->nullable();
            $table->integer('up07')->nullable();
            $table->integer('up08')->nullable();
            $table->integer('up09')->nullable();
            $table->integer('up10')->nullable();
            $table->integer('up11')->nullable();
            $table->integer('up12')->nullable();
            $table->integer('up13')->nullable();
            $table->integer('up14')->nullable();
            $table->integer('up15')->nullable();
            $table->integer('up16')->nullable();
            $table->integer('up17')->nullable();
            $table->integer('up18')->nullable();
            $table->integer('up19')->nullable();
            $table->integer('up20')->nullable();
            $table->integer('up21')->nullable();
            $table->integer('up22')->nullable();
            $table->integer('up23')->nullable();
            $table->foreign('venue_id')->references('id')->on('venue');
            $table->foreign('field_id')->references('id')->on('field_detail');
            $table->foreign('order_id')->references('id')->on('rent_order');
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
        Schema::dropIfExists('rent_hours');
    }
};
