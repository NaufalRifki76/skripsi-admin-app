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
        Schema::create('field_detail_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('field_detail_id');
            $table->longText('field_photo_base64');
            $table->foreign('field_detail_id')->references('id')->on('field_detail');
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
        Schema::dropIfExists('field_detail_photos');
    }
};
