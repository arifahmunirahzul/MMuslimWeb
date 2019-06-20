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
            $table->string('booking_id')->primary();
            $table->integer('customer_id');
            $table->integer('adminbook_id');
            $table->string('type_service');
            $table->date('date_booking');
            $table->integer('duration');
            $table->string('type_property');
            $table->string('clean_area');
            $table->integer('package');
            $table->integer('total_visitor');
            $table->string('type_event');
            $table->string('message');
            $table->datetime('created_at');
            $table->datetime('updated_at');
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
