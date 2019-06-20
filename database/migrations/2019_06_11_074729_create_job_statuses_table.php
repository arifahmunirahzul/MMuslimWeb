<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_statuses', function (Blueprint $table) {
            $table->integer('jobstatus_id')->increments()->primary();
            $table->integer('job_id');
            $table->enum('job_status', ['Pending', 'Active', 'Completed', 'Expired', 'In Process']);
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
        Schema::dropIfExists('job_statuses');
    }
}
