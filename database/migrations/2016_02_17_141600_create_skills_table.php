<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('skill_id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('skill_name');
            $table->string('skill_level');
            $table->integer('skill_experience');
            $table->string('skill_proof');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->boolean('basic_v');
            //$table->boolean('advance_v');
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
        Schema::drop('skills');
    }
}
