<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();

            //Team Related
            $table->string('nama_tim')->nullable();
            $table->enum('lomba', ['hack','ux','daming'])->nullable();
            $table->string('berkas_proposal')->nullable();
            $table->string('link_youtube')->nullable();
            
            //Payment Verify
            $table->string('nama_rekening')->nullable();
            $table->string('tgl_pembayaran')->nullable();
            $table->string('struk_pembayaran')->nullable();
            $table->timestamp('verif_pembayaran')->nullable();

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
        Schema::dropIfExists('teams');
    }
}
