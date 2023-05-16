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
        Schema::create('venue', function (Blueprint $table) {
            $table->id();
            $table->string('venue_name');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('venue_address');
            $table->time('open_hour');
            $table->time('close_hour');
            $table->string('venue_desc');
            $table->integer('drinks')->nullable();
            $table->integer('locker_room')->nullable();
            $table->integer('toilet')->nullable();
            $table->integer('parking_space')->nullable();
            $table->integer('wifi')->nullable();
            $table->integer('rent_equipments')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            // $table->string('owner_email')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('venue', function (Blueprint $table) {
            //
        });
    }
};
