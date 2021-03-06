<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcr_reg_subject', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_id');
            $table->integer('reg_subject_1');
            $table->integer('already_pick_1');
            $table->string('ps');
            $table->integer('priority');
            $table->rememberToken();
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
        Schema::drop('tcr_reg_subject');
    }
}
