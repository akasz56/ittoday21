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
            $table->text('name');
            $table->text('email');
            $table->text('password');
            $table->rememberToken();
            $table->string('bank')->nullable();
            $table->text('file_bayar')->nullable();
            $table->string('verified_bayar')->nullable();
            $table->string('jenis_lomba');
            $table->string('file_lomba')->nullable();
            $table->string('verified_lomba')->nullable(); // Verified ga?
            $table->timestamp('tgl_lomba')->nullable(); // Tgl Pengumpulan
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
