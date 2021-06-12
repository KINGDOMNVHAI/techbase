<?php

use App\Models\videos;
use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        videos::create([
            'name_vi_video' => 'Date A Live Rinne Utopia Vietsub Prologue Ngày 25/6 Cái chết của Shidou',
            'name_en_video' => 'Date A Live Rinne Utopia Vietsub Prologue June 25 Death of Shidou',
            // 'name_jp_video' => 'Date A Live Rinne Utopia Vietsub Prologue',

            'url_video' => 'date-a-live-rinne-utopia-vietsub-prologue',

            'description_vi_video' => '<p>Date A Live Rinne Utopia Vietsub Bạn thuở nhỏ</p>
            <p>Sonogami Rinne, một người bạn rất thân thiết với gia đình Shidou. Tuy nhiên, dù có ký ức về Rinne, </p>',

            'description_en_video' => 'Description Eng',
            // 'description_jp_video' => 'description_jp_video',

            'date_video' => '2015-08-01',
            'thumbnail_video' => 'date-a-live-rinne-utopia-vietsub-prologue-thumbnail.jpg',
            'id_channel' => CHANNEL_KINGDOM_NVHAI,

            // https://www.youtube.com/watch?v=IbMZvpSzvJE
        ]);

        videos::create([
            'name_vi_video' => 'Date a Dance 2  デートアダンス II DATE A LIVE デートアライブ',
            'name_en_video' => 'Date a Dance 2  デートアダンス II DATE A LIVE デートアライブ',
            // 'name_jp_video' => 'Date a Dance 2  デートアダンス II DATE A LIVE デートアライブ',

            'url_video' => 'date-a-dance-2',

            'description_vi_video' => '<p>Date a Dance 2 - デート・ア・ダンス II DATE A LIVE デート・ア・ライブ</p>
            <p>Sau 2 năm, Date a dance 2 tiếp tục được ra mắt mừng sinh nhật KINGDOM NVHAI lần 3.</p>',

            'description_en_video' => 'Description Eng',
            // 'description_jp_video' => 'description_jp_video',

            'date_video' => '2018-07-01',
            'thumbnail_video' => 'date-a-dance-2-thumbnail.jpg',
            'id_channel' => CHANNEL_KINGDOM_NVHAI,


            // https://www.youtube.com/watch?v=hxY99J_OMtg
        ]);

        videos::create([
            'name_vi_video' => 'MMD vs Witch RPG Battle Style Movie',
            'name_en_video' => 'MMD vs Witch RPG Battle Style Movie',
            // 'name_jp_video' => 'MMD vs Witch RPG Battle Style Movie',

            'url_video' => 'mmd-vs-witch-rpg-battle-style-movie',

            'description_vi_video' => '',

            'description_en_video' => 'Description Eng',
            // 'description_jp_video' => 'description_jp_video',

            'date_video' => '2018-05-05',
            'thumbnail_video' => 'mmd-vs-witch-rpg-battle-style-movie-thumbnail.jpg',
            'id_channel' => CHANNEL_KINGDOM_NVHAI,
        ]);

        videos::create([
            'name_vi_video' => 'Mọi người có thể đọc chữ [鰊] không? Mình có thể đấy... :)',
            'name_en_video' => '[鰊] Can you read this? I can read it... lol',
            // 'name_jp_video' => '「鰊」←これみんな読める？...私は読めますけどww',

            'url_video' => 'can-you-read-this-i-can-read-it',

            'description_vi_video' => '<p>Original Source: https://twitter.com/kaynimatic/status/1331909336340172801</p>
            <p>Animation: https://twitter.com/kaynimatic</p>
            <p>Song: https://twitter.com/corson31</p>',

            'description_en_video' => 'Description Eng',
            // 'description_jp_video' => 'Team 1',

            'date_video' => '2019-07-04',
            'thumbnail_video' => 'can-you-read-this-i-can-read-it-thumbnail.jpg',
            'id_channel' => CHANNEL_KIZUNA_AI,
        ]);

        videos::create([
            'name_vi_video' => 'Shiny Smily Story BGM | Hololive Pixel Festival/運動会',
            'name_en_video' => 'Shiny Smily Story BGM | Hololive Pixel Festival/運動会',
            // 'name_jp_video' => 'Shiny Smily Story BGM | Hololive Pixel Festival/運動会',

            'url_video' => 'shiny-smily-story-bgm-hololive-pixel-festival',

            'description_vi_video' => '<p>Original Source: https://twitter.com/kaynimatic/status/1331909336340172801</p>
            <p>Animation: https://twitter.com/kaynimatic</p>
            <p>Song: https://twitter.com/corson31</p>',

            'description_en_video' => 'Description Eng',
            // 'description_jp_video' => 'Team 1',

            'date_video' => '2021-11-26',
            'thumbnail_video' => 'shiny-smily-story-bgm-hololive-pixel-festival-thumbnail.jpg',
            'id_channel' => CHANNEL_HOLOLIVE,
        ]);


        // Pewdiepie Is BANNED in China LWIAY https://www.youtube.com/watch?v=8HehfOtRbUk pewdiepie-is-BANNED-in-China-LWIAY-0096
    }
}
