<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->string('id_channel')->primary()->default(Str::random(40));
            $table->string('name_channel')->unique();
            $table->string('url_channel')->unique();
            $table->string('url_video_present')->unique();
            $table->text('description_channel')->nullable();
            $table->text('description_video_vi')->nullable();
            $table->text('description_video_en')->nullable();
            $table->text('description_video_jp')->nullable();
            $table->integer('subscribe')->default(0);
            $table->boolean('enable_channel')->default(ENABLE);
            $table->string('thumbnail_channel');
            $table->string('facebook_channel')->nullable();
            $table->string('twitter_channel')->nullable();
            $table->string('instagram_channel')->nullable();
            $table->string('patreon_channel')->nullable();
            $table->boolean('favorite')->default(0);
            $table->boolean('virtual_youtuber')->default(0);
            $table->boolean('visual_novel')->default(0);
            $table->boolean('hololive')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channels');
    }
}
