<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraCursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_curs', function (Blueprint $table) {
            $table->increments('extra_id');
            $table->integer('user_id')->index();
            $table->string('excc_name');
            $table->date('excc_start_date');
            $table->date('excc_end_date');
            $table->text('excc_description');
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('extra_curs');
    }
}
