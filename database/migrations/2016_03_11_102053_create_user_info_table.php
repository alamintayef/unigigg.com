<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('fname');
            $table->string('lname');
            $table->string('area');
            $table->integer('post_code');
            $table->string('other');
            $table->string('institute');
            $table->date('passing_date');
            $table->string('mobile');
            $table->string('universityId');
            $table->string('NId');
            $table->string('facebookId')->nullable();
            $table->string('LinkedInId')->nullable();
            $table->string('youtube')->nullable();
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
        Schema::drop('user_info');
    }
}
