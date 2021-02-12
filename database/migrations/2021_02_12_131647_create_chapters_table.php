<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('chapters');
        Schema::create('chapters', function (Blueprint $table) {
            $table->increments('id_chapter');
            $table->string('title_chapter');
            $table->string('url_chapter')->nullable();
            $table->text('content_chapter');
            $table->string('thumbnail_chapter')->nullable();
            $table->integer('id_book_chapter');
            $table->integer('enable_chapter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapters');
    }
}
