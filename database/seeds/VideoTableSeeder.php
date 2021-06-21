<?php

use App\Models\iframevideo;
use App\Models\secretvideos;
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
        // Tao id=1 de phia tren moi video duoc tao de danh dau rang video nay co id=1
        // iframevideo se nhan id do. Sau do i++
        $id = 1;
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

        iframevideo::create([
            'id_video'      => $id,
            'embed_link_1'  => '<iframe width="100%" height="450" src="https://www.youtube.com/embed/IbMZvpSzvJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_1' => 'YOUTUBE',
        ]);

        $id++;
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

        iframevideo::create([
            'id_video'      => $id,
            'embed_link_1'  => '<video src="http://kingdomnvhai.info/upload/video/Date a Dance 2  デートアダンス II DATE A LIVE デートアライブ.mp4" width="100%" controls></video>',
            'source_link_1' => 'KINGDOM NVHAI',
        ]);

        $id++;
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

        iframevideo::create([
            'id_video'      => $id,
            'embed_link_1'  => '<video src="http://kingdomnvhai.info/upload/video/MMD vs Witch RPG Battle Style Movie.mp4" width="100%" controls></video>',
            'source_link_1' => 'KINGDOM NVHAI',
        ]);

        $id++;
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

        iframevideo::create([
            'id_video'      => $id,
            'embed_link_1'  => '<video src="http://kingdomnvhai.info/upload/video/「鰊」←これみんな読める？...私は読めますけどww.flv" width="100%" controls></video>',
            'source_link_1' => 'KINGDOM NVHAI',
        ]);

        $id++;
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

        iframevideo::create([
            'id_video'      => $id,
            'embed_link_1'  => '<video src="http://kingdomnvhai.info/upload/video/Hololive Festival Pixel.mp4" width="100%" controls></video>',
            'source_link_1' => 'KINGDOM NVHAI',
            'embed_link_2'  => '<iframe width="100%" height="450" src="https://www.youtube.com/embed/g0tMoxlmk5Y" title="Shiny Smily Story BGM | Hololive Pixel Festival" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_2' => 'YOUTUBE',
        ]);

        $id++;
        videos::create([
            'name_vi_video' => 'Tại sao người phụ nữ Nhật Bản này kết hôn với diễn viên phim người lớn?',
            'name_en_video' => 'Why This Japanese Woman Got Married to Porn Actor?',
            // 'name_jp_video' => 'Why This Japanese Woman Got Married to Porn Actor?',

            'url_video' => 'why-this-japanese-woman-got-married-to-porn-actor',

            'description_vi_video' => '',

            'description_en_video' => 'Help Nobita cover the Japan&apos;s issues: https://find-your-love.tsubasakaiser.com/index.html',
            // 'description_jp_video' => 'Team 1',

            'date_video' => '2020-01-10',
            'thumbnail_video' => 'why-this-japanese-woman-got-married-to-porn-actor-thumbnail.jpg',
            'id_channel' => CHANNEL_NOBITA_FROM_JAPAN,
        ]);

        iframevideo::create([
            'id_video'      => $id,
            'embed_link_1'  => '<iframe width="100%" height="450" src="https://www.youtube.com/embed/UFJOQFFtqrw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_1' => 'YOUTUBE',
        ]);

        // Pewdiepie Is BANNED in China LWIAY https://www.youtube.com/watch?v=8HehfOtRbUk pewdiepie-is-BANNED-in-China-LWIAY-0096
    }
}
