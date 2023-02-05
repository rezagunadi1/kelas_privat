<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiArduinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_arduinos', function (Blueprint $table) {
            $table->id();
            $table->string('token_id');
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->dateTime('time')->nullable();
            $table->bigInteger('humidity')->nullable();
            $table->bigInteger('humidity_real')->nullable();
            $table->bigInteger('temperature')->nullable();
            $table->bigInteger('temperature_real')->nullable();
            $table->bigInteger('pulse')->nullable();
            $table->bigInteger('pulse_real')->nullable();
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
        Schema::dropIfExists('api_arduinos');
    }
}
