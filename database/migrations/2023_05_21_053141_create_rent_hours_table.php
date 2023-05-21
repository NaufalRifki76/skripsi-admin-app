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
            $table->date('order_date');
            $table->integer('up00');
            $table->integer('up01');
            $table->integer('up02');
            $table->integer('up03');
            $table->integer('up04');
            $table->integer('up05');
            $table->integer('up06');
            $table->integer('up07');
            $table->integer('up08');
            $table->integer('up09');
            $table->integer('up10');
            $table->integer('up11');
            $table->integer('up12');
            $table->integer('up13');
            $table->integer('up14');
            $table->integer('up15');
            $table->integer('up16');
            $table->integer('up17');
            $table->integer('up18');
            $table->integer('up19');
            $table->integer('up20');
            $table->integer('up21');
            $table->integer('up22');
            $table->integer('up23');
            $table->foreign('venue_id')->references('id')->on('venue');
            $table->foreign('field_id')->references('id')->on('field_detail');
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
