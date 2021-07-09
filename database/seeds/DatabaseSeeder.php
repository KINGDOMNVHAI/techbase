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
        $this->call(BooksTableSeeder::class);
        $this->call(CategoryPostTableSeeder::class);
        $this->call(ChannelsTableSeeder::class);
        $this->call(ChaptersTableSeeder::class);
        $this->call(CommentVideoTableSeeder::class);
        $this->call(IframeVideoTableSeeder::class);
        $this->call(PresentpostTableSeeder::class);
        $this->call(SecretVideosSeeder::class);
        $this->call(VideoTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
