<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('service');
            $table->string('addon');
            $table->string('duration');
            $table->string('time');
            $table->string('date');
            $table->string('agent');
            $table->string('status');
            $table->string('address');
            $table->string('phone');
            $table->string('request');
            $table->string('payment_type');
            $table->string('payment_status');
            $table->string('total_price');
            $table->string('token');
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
        Schema::dropIfExists('bookings');
    }
}
