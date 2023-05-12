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
            $table->string('venue_address');
            $table->time('open_hour');
            $table->time('close_hour');
            $table->string('venue_desc');
            $table->boolean('drinks')->default(0);
            $table->boolean('locker_room')->default(0);
            $table->boolean('toilet')->default(0);
            $table->boolean('parking_space')->default(0);
            $table->boolean('wifi')->default(0);
            $table->boolean('rent_equipments')->default(0);
            $table->timestamps();
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
        Schema::table('field_owner', function (Blueprint $table) {
            //
        });
    }
};
