<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bit_jobs', function (Blueprint $table) {
            $table->integer('bitjob_id')->increments()->primary();
            $table->integer('job_id');
            $table->integer('provider_id');
            $table->decimal('price', 10, 2);
            $table->string('message');
            $table->enum('status', ['Pending', 'Accept', 'Unaccept', 'Expired']);
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
        Schema::dropIfExists('bit_jobs');
    }
}
