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
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id_video');
            $table->string('name_vi_video')->unique();
            $table->string('name_en_video')->unique()->nullable();
            // $table->string('name_jp_video')->unique();
            $table->string('url_video')->unique();
            $table->text('description_vi_video')->nullable();
            $table->text('description_en_video')->nullable();
            // $table->text('description_jp_video')->nullable();
            $table->boolean('enable_video')->default(ENABLE);
            $table->date('date_video');
            $table->string('thumbnail_video')->nullable();
            $table->boolean('enable_vi')->default(ENABLE);
            $table->boolean('enable_en')->default(UNENABLE);
            $table->boolean('enable_jp')->default(UNENABLE);
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
        Schema::dropIfExists('videos');
    }
}
