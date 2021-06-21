<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecretvideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('secretvideos', function (Blueprint $table) {
            $table->increments('id_secretvideo');
            $table->string('name_vi_secretvideo')->unique();
            $table->string('name_en_secretvideo')->unique()->nullable();
            // $table->string('name_jp_video')->unique();
            $table->string('url_video')->unique();
            $table->text('description_vi_secretvideo')->nullable();
            $table->text('description_en_secretvideo')->nullable();
            // $table->text('description_jp_secretvideo')->nullable();
            $table->boolean('enable_secretvideo')->default(ENABLE);
            $table->date('date_secretvideo');
            $table->string('thumbnail_secretvideo')->nullable();
            $table->string('id_channel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secretvideos');
    }
}
