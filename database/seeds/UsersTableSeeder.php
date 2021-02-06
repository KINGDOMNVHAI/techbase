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
    }
}
