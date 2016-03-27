<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fun_facts', function (Blueprint $table) {
            $table->increments('fun_id');
            $table->integer('user_id')->index();
            $table->string('fun_facts');
            $table->string('inspiration_qot');
            $table->text('Why_you');
            $table->text('Why_not_you');

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
        Schema::drop('fun_facts');
    }
}
