<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('job_id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('job_name');
            $table->string('job_type');
            $table->string('job_salary');
            $table->string('job_location');
            $table->text('job_description');
            $table->text('min_edu_level')->nullable();
            $table->text('major')->nullable();
            $table->float('cgpa')->nullable();
            $table->text('job_skill_reqs');
            $table->text('job_reqs_additional')->nullable();
            $table->date('job_start_date');
            $table->date('job_last_date_application');
            $table->date('job_expires');
            $table->boolean('paid')->default(0);
            $table->string('slug')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('jobs');
    }
}
