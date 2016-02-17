<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nickname')->nullable();
            $table->string('real_name')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('password', 60);
            $table->string('head_img_url')->nullable();
            $table->string('signature')->nullable();
            $table->string('sex')->nullable();
            $table->integer('age')->nullable();
            $table->string('address')->nullable();
            $table->string('tag')->nullable();
            $table->string('psychological_test')->nullable();
            $table->dateTime('time');
            $table->dateTime('last_login_time')->nullable();

            $table->rememberToken();
            $table->timestamps();

            $table->unique('phone');
            $table->index('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
