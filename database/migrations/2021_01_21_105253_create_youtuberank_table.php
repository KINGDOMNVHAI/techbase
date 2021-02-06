<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoutuberankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('youtuberank', function (Blueprint $table) {
            $table->string('id_channel');
            $table->string('name_channel');
            $table->string('url_channel');
            $table->text('url_video')->nullable();
            $table->string('thumbnail_channel')->nullable();
            $table->text('description')->nullable();
            $table->integer('fan_count')->default(0);
            $table->boolean('enable');
            $table->boolean('favorite')->default(false);
            $table->boolean('virtual_youtuber')->default(false);
            $table->boolean('visual_novel')->default(false);
            $table->boolean('hololive')->default(false);
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
        Schema::dropIfExists('youtuberank');
    }
}
