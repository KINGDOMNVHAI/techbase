<?php

use App\Model\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'          => 'CEO',
            'username'      => 'CEO',
            'password'      => bcrypt('123'),
            'email'         => 'ceo@gmail.com',
            'role'          => ROLE_CEO,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'manager room 1',
            'username'      => 'manager1',
            'password'      => bcrypt('123'),
            'email'         => 'manager1@gmail.com',
            'role'          => ROLE_MANAGER_ROOM,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'manager room 2',
            'username'      => 'manager2',
            'password'      => bcrypt('123'),
            'email'         => 'manager2@gmail.com',
            'role'          => ROLE_MANAGER_ROOM,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'manager room 3',
            'username'      => 'manager3',
            'password'      => bcrypt('123'),
            'email'         => 'manager3@gmail.com',
            'role'          => ROLE_MANAGER_ROOM,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'team leader 1',
            'username'      => 'teamleader1',
            'password'      => bcrypt('123'),
            'email'         => 'teamleader1@gmail.com',
            'role'          => ROLE_TEAM_LEADER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'team leader 2',
            'username'      => 'teamleader2',
            'password'      => bcrypt('123'),
            'email'         => 'teamleader2@gmail.com',
            'role'          => ROLE_TEAM_LEADER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'team leader 3',
            'username'      => 'teamleader3',
            'password'      => bcrypt('123'),
            'email'         => 'teamleader3@gmail.com',
            'role'          => ROLE_TEAM_LEADER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'team leader 4',
            'username'      => 'teamleader4',
            'password'      => bcrypt('123'),
            'email'         => 'teamleader4@gmail.com',
            'role'          => ROLE_TEAM_LEADER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'team leader 5',
            'username'      => 'teamleader5',
            'password'      => bcrypt('123'),
            'email'         => 'teamleader5@gmail.com',
            'role'          => ROLE_TEAM_LEADER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'team leader 6',
            'username'      => 'teamleader6',
            'password'      => bcrypt('123'),
            'email'         => 'teamleader6@gmail.com',
            'role'          => ROLE_TEAM_LEADER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 1',
            'username'      => 'member1',
            'password'      => bcrypt('123'),
            'email'         => 'member1@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 2',
            'username'      => 'member2',
            'password'      => bcrypt('123'),
            'email'         => 'member2@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 3',
            'username'      => 'member3',
            'password'      => bcrypt('123'),
            'email'         => 'member3@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 4',
            'username'      => 'member4',
            'password'      => bcrypt('123'),
            'email'         => 'member4@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 5',
            'username'      => 'member5',
            'password'      => bcrypt('123'),
            'email'         => 'member5@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 6',
            'username'      => 'member6',
            'password'      => bcrypt('123'),
            'email'         => 'member6@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 7',
            'username'      => 'member7',
            'password'      => bcrypt('123'),
            'email'         => 'member7@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 8',
            'username'      => 'member8',
            'password'      => bcrypt('123'),
            'email'         => 'member8@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 9',
            'username'      => 'member9',
            'password'      => bcrypt('123'),
            'email'         => 'member9@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 10',
            'username'      => 'member10',
            'password'      => bcrypt('123'),
            'email'         => 'member10@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 11',
            'username'      => 'member11',
            'password'      => bcrypt('123'),
            'email'         => 'member11@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 12',
            'username'      => 'member12',
            'password'      => bcrypt('123'),
            'email'         => 'member12@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 13',
            'username'      => 'member13',
            'password'      => bcrypt('123'),
            'email'         => 'member13@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 14',
            'username'      => 'member14',
            'password'      => bcrypt('123'),
            'email'         => 'member14@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        User::create([
            'name'          => 'member 15',
            'username'      => 'member15',
            'password'      => bcrypt('123'),
            'email'         => 'member15@gmail.com',
            'role'          => ROLE_MEMBER,
            'enable_user'   => ENABLE,
        ]);

        for ($i=1; $i<=1500; $i++)
        {
            User::create([
                'name'          => 'other member',
                'username'      => 'othermember' . $i,
                'password'      => bcrypt('123'),
                'email'         => 'othermember' . $i . '@gmail.com',
                'role'          => ROLE_MEMBER,
                'enable_user'   => ENABLE,
            ]);
        }
    }
}
