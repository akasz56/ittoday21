<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->uuid('ticketID');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('whatsapp')->nullable();
            $table->unsignedBigInteger('bundleID')->nullable();
            $table->unsignedBigInteger('event1ID');
            $table->unsignedBigInteger('event2ID');
            $table->unsignedBigInteger('event3ID')->nullable();
            $table->unsignedBigInteger('event4ID')->nullable();
            $table->unsignedBigInteger('event5ID')->nullable();
            $table->string('payMethod')->nullable();
            $table->string('payName')->nullable();
            $table->string('payFile')->nullable();
            $table->string('payStatus')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
