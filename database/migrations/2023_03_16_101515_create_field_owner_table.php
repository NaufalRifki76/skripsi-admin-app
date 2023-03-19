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
        Schema::create('field_owner', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('field_name');
            $table->string('field_address');
            $table->string('field_type');
            $table->integer('booking_cost');
            $table->string('facilities');
            $table->string('owner_email')->unique();
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
