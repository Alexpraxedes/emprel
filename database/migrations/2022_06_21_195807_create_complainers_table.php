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
        Schema::create('complainers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->longText('description');
            $table->longText('observations');

            $table->string('name');
            $table->string('adress');
            $table->string('complement');
            $table->string('province');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('phone_number');
            $table->string('email');

            /** Animal Data
            * $table->string('race');
            * $table->integer('qty');
            * $table->string('event_date'); */

            /** Food Complaint - Victim information
            * $table->string('name');
            * $table->string('event_date'); */

            /** Special Complaint - Event information
            * $table->string('age');
            * $table->string('school_level');
            * $table->string('ocuppation'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complainers');
    }
};
