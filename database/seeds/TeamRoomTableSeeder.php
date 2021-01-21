<?php

use App\Model\TeamRoom;
use Illuminate\Database\Seeder;

class TeamRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeamRoom::create([
            'id_team'           => 1,
            'id_room'           => 1,
            'enable_team_room'  => ENABLE,
        ]);

        TeamRoom::create([
            'id_team'           => 2,
            'id_room'           => 1,
            'enable_team_room'  => ENABLE,
        ]);

        TeamRoom::create([
            'id_team'           => 3,
            'id_room'           => 2,
            'enable_team_room'  => ENABLE,
        ]);

        TeamRoom::create([
            'id_team'           => 4,
            'id_room'           => 2,
            'enable_team_room'  => ENABLE,
        ]);

        TeamRoom::create([
            'id_team'           => 5,
            'id_room'           => 3,
            'enable_team_room'  => ENABLE,
        ]);

        TeamRoom::create([
            'id_team'           => 6,
            'id_room'           => 3,
            'enable_team_room'  => ENABLE,
        ]);
    }
}
