<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('em_infos', function (Blueprint $table) {
            $table->increments('em_infos_id');
            $table->integer('user_id')->index();
            $table->string('company_name');
            $table->string('company_phone');
            $table->string('company_email');
            $table->string('company_address');
            $table->string('company_type');
            $table->string('company_size');
            $table->string('company_description');
            //$table->foreign('employer_eid')->references('eid')->on('em_users')->onDelete('cascade');
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
        Schema::drop('em_infos');
    }
}
