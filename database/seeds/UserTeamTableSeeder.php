<?php

use App\Model\UserTeam;
use Illuminate\Database\Seeder;

class UserTeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // === Team Leader ===

        UserTeam::create([
            'id_user'           => 5,
            'id_team'           => 1,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 6,
            'id_team'           => 2,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 7,
            'id_team'           => 3,
            'enable_user_team'  => ENABLE,
        ]);
        UserTeam::create([
            'id_user'           => 8,
            'id_team'           => 4,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 9,
            'id_team'           => 5,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 10,
            'id_team'           => 6,
            'enable_user_team'  => ENABLE,
        ]);

        // === Member ===

        UserTeam::create([
            'id_user'           => 11,
            'id_team'           => 1,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 11,
            'id_team'           => 2,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 12,
            'id_team'           => 1,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 12,
            'id_team'           => 3,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 13,
            'id_team'           => 1,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 14,
            'id_team'           => 2,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 15,
            'id_team'           => 2,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 16,
            'id_team'           => 2,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 17,
            'id_team'           => 3,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 18,
            'id_team'           => 3,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 19,
            'id_team'           => 3,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 20,
            'id_team'           => 4,
            'enable_user_team'  => UNENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 21,
            'id_team'           => 4,
            'enable_user_team'  => UNENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 22,
            'id_team'           => 4,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 23,
            'id_team'           => 5,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 24,
            'id_team'           => 5,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 25,
            'id_team'           => 5,
            'enable_user_team'  => ENABLE,
        ]);

        UserTeam::create([
            'id_user'           => 26,
            'id_team'           => 6,
            'enable_user_team'  => ENABLE,
        ]);
    }
}
