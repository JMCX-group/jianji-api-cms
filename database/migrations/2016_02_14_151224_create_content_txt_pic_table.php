<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTxtPicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_txt_pic', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('uid');
            $table->string('type');
            $table->string('text');
            $table->string('pic_url');
            $table->string('gps');
            $table->string('mood_val');
            $table->string('tag');
            $table->string('competence');
            $table->string('sync_to');
            $table->dateTime('time');

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
        Schema::drop('content_txt_pic');
    }
}
