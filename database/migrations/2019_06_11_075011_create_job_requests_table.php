<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_requests', function (Blueprint $table) {
            $table->integer('job_id')->increments()->primary();
            $table->integer('provider_id');
            $table->string('booking_id');
            $table->enum('service', ['Pembantu Rumah', 'Urut Pantang', 'Katering']);
            $table->string('city');
            $table->string('address');
            $table->string('postcode');
            $table->string('state');
            $table->string('lng');
            $table->string('lat');
            $table->decimal('job_rating', 10, 1);
            $table->string('feedback');
            $table->enum('status_job', ['Pending', 'In Process', 'Active', 'Completed', 'Expired']);
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
        Schema::dropIfExists('job_requests');
    }
}
