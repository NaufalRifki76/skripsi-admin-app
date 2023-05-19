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
        Schema::create('rent_order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('cust_name');
            $table->unsignedBigInteger('venue_id');
            $table->string('venue_name');
            $table->string('cust_number');
            $table->string('cust_email');
            $table->string('field');
            $table->string('order_date');
            $table->time('start_hour');
            $table->time('end_hour');
            $table->string('price_sum');
            $table->boolean('confirmation')->default(0);
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
        Schema::dropIfExists('rent_order');
    }
};
