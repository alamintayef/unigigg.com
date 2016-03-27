<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmShortlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('em_shortlists', function (Blueprint $table) {
            $table->increments('em_shortlist_id');
            $table->integer('user_id')->index();
            $table->integer('shortlisted_for_job_id');

          //  $table->foreign('employer_eid')->references('eid')->on('em_users');
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          //  $table->foreign('shortlisted_for_job_id')->references('job_id')->on('jobs')->onDelete('cascade');
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
        Schema::drop('em_shortlists');
    }
}