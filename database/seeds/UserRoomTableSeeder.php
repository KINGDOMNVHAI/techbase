<?php

use App\Model\UserRoom;
use Illuminate\Database\Seeder;

class UserRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRoom::create([
            'id_user'           => 2,
            'id_room'           => 1,
            'enable_team_room'  => ENABLE,
        ]);

        UserRoom::create([
            'id_user'           => 3,
            'id_room'           => 2,
            'enable_team_room'  => ENABLE,
        ]);

        UserRoom::create([
            'id_user'           => 4,
            'id_room'           => 3,
            'enable_team_room'  => ENABLE,
        ]);
    }
}
