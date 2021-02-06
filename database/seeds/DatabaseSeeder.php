<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryPostTableSeeder::class);
        $this->call(IframeVideoTableSeeder::class);
        $this->call(VideoTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(YoutuberankTableSeeder::class);
    }
}
