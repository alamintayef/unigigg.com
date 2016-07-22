<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('description');
            $table->string('competition_slug')->unique();
            $table->date('event_date');
            $table->date('last_date_of_application');
            $table->string('competition_link');
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
        Schema::drop('competitions');
    }
}
