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
        Schema::create('refund', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('no_telephone');
            $table->string('email');
            $table->string('bank');
            $table->string('bank_acc_no');
            $table->string('bank_acc_name');
            $table->unsignedBigInteger('venue_id');
            $table->unsignedBigInteger('field_detail_id');
            $table->date('order_date');
            $table->string('price_sum');
            $table->longText('transfer_confirm_base64')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('venue_id')->references('id')->on('venue');
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
        Schema::dropIfExists('refund');
    }
};
