<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // blog table
      Schema::create('blogs', function(Blueprint $table)
      {
          $table->increments('id');
          $table->integer('user_id')->unsigned()->index();
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->string('title')->unique();
          $table->text('subtitle');
          $table->text('body');
          $table->string('slug')->unique();
          $table->boolean('status')->default(0);
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
        //
            Schema::drop('blogs');
    }
}
