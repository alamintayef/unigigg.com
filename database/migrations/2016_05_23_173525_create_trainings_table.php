<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('training_description');
            $table->string('training_type');
            $table->string('training_slug')->unique();
            $table->date('training_start_date');
            $table->date('application_dead_line');
            $table->string('application_fee');
            $table->string('payment_method');
            $table->string('organized_by');
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
        Schema::drop('trainings');
    }
}
