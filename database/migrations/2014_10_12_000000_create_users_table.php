<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
           
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('passwords');
            $table->string('role')->default('0');
            $table->longText('image')->nullable();
            $table->longText('sekolah')->default('Kelas Privat');
            $table->longText('alamat')->default('Kelas Privat');
            $table->string('kelas')->default('Kelas Privat');
            $table->string('hp')->default('08xxxxx');
            $table->string('point')->default('0');
            $table->string('rating')->default('-');
            $table->longText('status')->default('Juara bersama Kelas Privat');
            $table->string('is_active')->default('0');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
