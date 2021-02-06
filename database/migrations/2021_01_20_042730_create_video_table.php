<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('video', function (Blueprint $table) {
            $table->increments('id_video');
            $table->string('name_vi_video')->unique();
            $table->string('name_en_video')->unique();
            $table->string('name_jp_video')->unique();
            $table->string('url_video');
            $table->boolean('enable_video')->default(ENABLE);
            $table->text('description_vi_video');
            $table->text('description_en_video');
            $table->text('description_jp_video');
            $table->integer('youtube_channel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video');
    }
}
