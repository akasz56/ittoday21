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
            $table->timestamp('tgl_bayar')->nullable();
            $table->text('file_bayar')->nullable();
            $table->boolean('verified_bayar')->nullable();
            $table->enum('jenis_lomba', [ 'hack', 'ux_1', 'ux_2', 'busy_1', 'busy_2']);
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
