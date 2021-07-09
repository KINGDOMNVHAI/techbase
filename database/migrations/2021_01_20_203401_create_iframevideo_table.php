<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIframevideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('iframevideo', function (Blueprint $table) {
            $table->increments('id_iframe_video');
            $table->integer('id_video');
            $table->integer('id_iframe');
            $table->string('language')->default("vi");
            $table->boolean('secret_video')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iframevideo');
    }
}
