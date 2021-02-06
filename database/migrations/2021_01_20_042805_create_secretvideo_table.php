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
        Schema::create('secretvideo', function (Blueprint $table) {
            $table->increments('id_secretvideo');
            $table->string('name_vi_secretvideo');
            $table->string('name_en_secretvideo')->nullable();
            $table->string('url_secretvideo');
            $table->text('present_vi_secretvideo');
            $table->text('present_en_secretvideo')->nullable();
            $table->text('content_vi_secretvideo');
            $table->text('content_en_secretvideo')->nullable();
            $table->date('date_secretvideo');
            $table->string('thumbnail_secretvideo')->nullable();
            $table->integer('id_cat_secretvideo');
            $table->string('author');
            $table->string('views')->nullable();
            $table->string('enable_secretvideo')->default(false);

            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secretvideo');
    }
}
