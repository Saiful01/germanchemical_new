<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('app_name');
            $table->string('app_email');
            $table->string('app_max_edu');
            $table->string('app_phone');
            $table->string('app_password');
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
        Schema::dropIfExists('applicant_tables');
    }
}
