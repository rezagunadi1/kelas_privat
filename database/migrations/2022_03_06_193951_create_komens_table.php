<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komens', function (Blueprint $table) {
            $table->id();
            $table->string('chat_id');
            $table->string('user_id');
            $table->longText('komen');
            $table->longText('foto')->nullable();
            $table->string('is_pin')->default('0');
            $table->bigInteger('is_deleted')->default(0);
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
        Schema::dropIfExists('komens');
    }
}
