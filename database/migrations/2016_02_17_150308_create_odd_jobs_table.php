<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOddJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odd_jobs', function (Blueprint $table) {
            $table->increments('odd_id');
            $table->integer('user_id')->index();
            $table->string('title');
            $table->string('type');
            $table->text('description');
            $table->string('offring');
            $table->string('area');
            $table->string('university')->nullable();
          //  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('odd_jobs');
    }
}
