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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_adress');
            $table->string('event_complement');
            $table->string('event_province');
            $table->string('event_city');
            $table->string('event_state');
            $table->string('event_zip_code');
            $table->string('event_phone_number');

            $table->string('school_level');
            $table->string('ocuppation');
            $table->string('event_date');
            $table->string('name');
            $table->string('race');
            $table->integer('qty');
            $table->string('age');
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
        Schema::dropIfExists('events');
    }
};
