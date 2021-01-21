<?php

use App\Model\Team;
use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name_team' => 'Team 1',
        ]);

        Team::create([
            'name_team' => 'Team 2',
        ]);

        Team::create([
            'name_team' => 'Team 3',
        ]);

        Team::create([
            'name_team' => 'Team 4',
        ]);

        Team::create([
            'name_team' => 'Team 5',
        ]);

        Team::create([
            'name_team' => 'Team 6',
        ]);
    }
}
