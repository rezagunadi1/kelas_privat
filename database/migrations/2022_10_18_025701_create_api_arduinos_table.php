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
            $table->double('port0')->nullable();
            $table->double('port1')->nullable();
            $table->double('port2')->nullable();
            $table->double('port3')->nullable();
            $table->double('port4')->nullable();
            $table->double('port5')->nullable();
            $table->double('port6')->nullable();
            $table->string('value0')->nullable();
            $table->string('value1')->nullable();
            $table->string('value2')->nullable();
            $table->string('value3')->nullable();
            $table->string('value4')->nullable();
            $table->string('value5')->nullable();
            $table->string('value6')->nullable();
            $table->string('type')->nullable()->comment('temperatur,humidity,light,cm,volt,ampere,gram');
            $table->string('type')->nullable()->comment('temperatur,humidity,light,cm,volt,ampere,gram');
            $table->string('type')->nullable()->comment('temperatur,humidity,light,cm,volt,ampere,gram');
            $table->string('type')->nullable()->comment('temperatur,humidity,light,cm,volt,ampere,gram');
            $table->string('type')->nullable()->comment('temperatur,humidity,light,cm,volt,ampere,gram');
            $table->string('type')->nullable()->comment('temperatur,humidity,light,cm,volt,ampere,gram');
            $table->string('type')->nullable()->comment('temperatur,humidity,light,cm,volt,ampere,gram');
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
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
