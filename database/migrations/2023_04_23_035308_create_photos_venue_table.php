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
        Schema::create('photos_venue', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('venue_id');
            $table->text('venue_photo_base64');
            $table->foreign('venue_id')->references('id')->on('venue');
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
        Schema::dropIfExists('photos_field');
    }
};
