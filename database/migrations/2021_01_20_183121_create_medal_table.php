<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('medal', function (Blueprint $table) {
            $table->increments('id_medal');
            $table->string('name_en_medal');
            $table->string('name_vi_medal');
            $table->string('content_en_medal');
            $table->string('content_vi_medal');
            $table->string('img_medal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medal');
    }
}
