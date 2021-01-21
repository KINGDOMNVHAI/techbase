<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_room', function (Blueprint $table) {
            $table->integer('id_team');
            $table->integer('id_room');
            $table->boolean('enable_team_room')->default(ENABLE);
            $table->date('join_date')->default(date("Y-m-d"));
            $table->date('out_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_room');
    }
}
