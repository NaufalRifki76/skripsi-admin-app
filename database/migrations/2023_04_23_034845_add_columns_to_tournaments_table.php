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
        Schema::table('tournaments', function (Blueprint $table) {
            $table->integer('entry_fee');
            $table->string('education_category')->nullable();
            $table->string('age_category')->nullable();
            $table->date('registration_start');
            $table->date('registration_end');
            $table->integer('team_pool');
            $table->string('contact_person');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tournaments', function (Blueprint $table) {
            $table->dropColumn('entry_fee');
            $table->dropColumn('education_category');
            $table->dropColumn('age_category');
            $table->dropColumn('registration_start');
            $table->dropColumn('registration_end');
            $table->dropColumn('team_pool');
            $table->dropColumn('contact_person');
        });
    }
};
