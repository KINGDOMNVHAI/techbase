<?php

use App\Models\User;
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
            'lastname'  => 'Nguyễn Việt',
            'firstname' => 'Hải',
            'username'  => 'NVHAI',
            'password'  => bcrypt('ThienNu0107'),
            'email'     => 'kingdomnvhai@gmail.com',
            'role'      => ROLE_ADMIN,

            'city'      => 'TPHCM',
            'address'   => 'Q1',
            'company'   => 'KINGDOM NVHAI',
            'aboutme'   => 'KINGDOM NVHAI',
            'signature' => 'NVHAI',
            'avatar'    => 'avatar_dva.jpg',
            'banner'    => 'banner_Kurumi.jpg',
            'medal'     => "1,2,4,7",
        ]);

        User::create([
            'lastname'  => 'LMHT',
            'firstname' => 'Ahri',
            'username'  => 'Ahri061993',
            'password'  => bcrypt('1234567'),
            'email'     => 'nvhai061993@gmail.com',
            'role'      => ROLE_EDITOR,

            'city'      => 'TPHCM',
            'avatar'    => 'avatar_Ahri.jpg',
            'banner'    => 'banner_Ahri.jpg',
        ]);

        User::create([
            'lastname'  => 'Overwatch',
            'firstname' => 'DVA',
            'username'  => 'dva123',
            'password'  => bcrypt('1234567'),
            'email'     => 'tieudoicho@yahoo.com.vn',
            'role'      => ROLE_WRITER,

            'city'      => 'TPHCM',
            'avatar'    => 'avatar_dva_2.jpg',
            'banner'    => 'banner_dva_2.jpg',
        ]);

        User::create([
            'lastname'  => 'Tokino',
            'firstname' => 'Sora',
            'username'  => 'sora',
            'password'  => bcrypt('1234567'),
            'email'     => 'nvhai2306@gmail.com',
            'role'      => ROLE_MEMBER,

            'city'      => 'TPHCM',
            'avatar'    => 'avatar_dva_2.jpg',
            'banner'    => 'banner_dva_2.jpg',
        ]);

        User::create([
            'lastname'  => 'Tokisaki',
            'firstname' => 'Kurumi',
            'username'  => 'kurumi',
            'password'  => bcrypt('1234567'),
            'email'     => 'kingdom2dnvhai@gmail.com',
            'role'      => ROLE_MEMBER,

            'city'      => 'TPHCM',
            'avatar'    => 'avatar_dva_2.jpg',
            'banner'    => 'banner_dva_2.jpg',
        ]);

        User::create([
            'lastname'  => 'Anh',
            'firstname' => 'Thu',
            'username'  => 'thu',
            'password'  => bcrypt('1234567'),
            'email'     => 'sarangthunguyen@gmail.com',
            'role'      => ROLE_MEMBER,

            'city'      => 'TPHCM',
            'avatar'    => 'avatar_dva_2.jpg',
            'banner'    => 'banner_dva_2.jpg',
        ]);
    }
}
