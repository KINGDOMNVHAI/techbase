<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentvideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentvideo', function (Blueprint $table) {
            $table->increments('id_cmt');
            $table->string('username_cmt');
            $table->string('title_cmt');
            $table->text('content_cmt');
            $table->integer('parent_cmt')->default(0);
            $table->boolean('enable_cmt')->default(ENABLE);
            $table->integer('id_video')->default(0);
            $table->integer('id_secretvideo')->default(0);
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
        Schema::dropIfExists('commentvideo');
    }
}
