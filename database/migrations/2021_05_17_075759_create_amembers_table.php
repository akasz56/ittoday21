<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amembers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('nim')->nullable();
            $table->string('institusi')->nullable();
            $table->string('prov')->nullable();
            $table->string('kota')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('idline')->nullable();
            // $table->string('foto')->nullable();
            $table->string('ktm')->nullable();
            $table->string('skma')->nullable();
            $table->string('status_ktm')->nullable();
            $table->string('status_skma')->nullable();
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
        Schema::dropIfExists('amembers');
    }
}
