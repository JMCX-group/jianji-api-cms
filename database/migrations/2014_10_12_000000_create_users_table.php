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

            $table->string('nickname');
            $table->string('real_name');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('head_img_url');
            $table->string('signature');
            $table->string('sex')->default('1');
            $table->integer('age');
            $table->string('address');
            $table->string('tag');
            $table->string('psychological_test');
            $table->dateTime('time');
            $table->dateTime('last_login_time');

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
        Schema::drop('users');
    }
}
