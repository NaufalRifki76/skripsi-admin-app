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
            $table->date('open_hour');
            $table->date('close_hour');
            $table->string('venue_desc');
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
