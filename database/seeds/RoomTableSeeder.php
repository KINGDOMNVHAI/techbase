<?php

use App\Model\Room;
use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'name_room' => 'room 1',
        ]);

        Room::create([
            'name_room' => 'room 2',
        ]);

        Room::create([
            'name_room' => 'room 3',
        ]);

        Room::create([
            'name_room'   => 'room 4',
            'enable_room' => UNENABLE,
        ]);
    }
}
