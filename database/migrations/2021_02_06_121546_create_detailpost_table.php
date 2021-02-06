<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailpostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('detailpost', function (Blueprint $table) {
            $table->increments('id_detailpost');
            $table->string('name_vi_detailpost');
            $table->string('name_en_detailpost')->nullable();
            $table->string('url_detailpost');
            $table->text('present_vi_detailpost');
            $table->text('present_en_detailpost')->nullable();
            $table->text('content_vi_detailpost');
            $table->text('content_en_detailpost')->nullable();
            $table->date('date_detailpost');
            $table->string('thumbnail_detailpost')->nullable();
            $table->integer('id_cat_detailpost');
            $table->string('signature');
            $table->string('author');
            $table->string('views')->nullable();
            $table->string('enable_detailpost')->default(false);
            $table->string('popular')->default(0);
            $table->string('hot_trend')->default(0);
            $table->string('update')->default(0);

            // $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('detailpost');
    }
}
