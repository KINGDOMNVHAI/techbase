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
            $table->increments('id_iframe');
            $table->integer('id_video');
            $table->text('embed_link_1');
            $table->text('embed_link_2')->nullable();
            $table->text('embed_link_3')->nullable();
            $table->text('embed_link_4')->nullable();
            $table->text('source_link_1');
            $table->text('source_link_2')->nullable();
            $table->text('source_link_3')->nullable();
            $table->text('source_link_4')->nullable();
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
