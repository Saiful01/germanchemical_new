<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('job_id');
            $table->string('job_title');
            $table->text('job_description')->nullable();
            $table->Text('job_qualification')->nullable();
            $table->integer('job_vacancy')->nullable();
            $table->text('job_salary')->nullable();
            $table->string('job_experience')->nullable();
            $table->string('job_employment_status')->nullable();
         
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
        Schema::dropIfExists('jobs');
    }
}
