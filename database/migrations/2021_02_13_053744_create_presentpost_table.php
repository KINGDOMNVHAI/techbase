<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentpostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('presentpost', function (Blueprint $table) {
            $table->increments('id_presentpost');
            $table->string('title_presentpost');
            $table->string('url_presentpost');
            $table->text('content_presentpost');
            $table->string('thumbnail_presentpost');
            $table->integer('id_website');
            $table->boolean('enable_presentpost')->default(ENABLE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presentpost');
    }
}
