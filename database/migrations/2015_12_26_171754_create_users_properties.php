<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcr_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_id')->unique();
            $table->integer('is_chief');
            $table->integer('chief_assigner');
            $table->integer('is_chicken');
            $table->integer('chicken_assigner');
            $table->integer('is_chick');
            $table->integer('chick_assigner');
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
        Schema::drop('tcr_properties');
    }
}
