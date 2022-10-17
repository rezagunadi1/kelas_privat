<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('paket_id');
            $table->longText('soal')->nullable();
            $table->longText('image_soal')->nullable();
            $table->longText('jawaban_a')->nullable();
            $table->longText('jawaban_b')->nullable();
            $table->longText('jawaban_c')->nullable();
            $table->longText('jawaban_d')->nullable();
            $table->longText('jawaban_e')->nullable();
            $table->longText('image_a')->nullable();
            $table->longText('image_b')->nullable();
            $table->longText('image_c')->nullable();
            $table->longText('image_d')->nullable();
            $table->longText('image_e')->nullable();
            $table->string('kunci');
            // $table->string('tahun');
            $table->string('owner_id');
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
        Schema::dropIfExists('soals');
    }
}
