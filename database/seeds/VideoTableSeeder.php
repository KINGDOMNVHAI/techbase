<?php

use App\Models\iframe;
use App\Models\iframevideo;
use App\Models\videos;
use App\Seeder\videoSeeder\KingdomnvhaiVideos;
use App\Seeder\videoSeeder\SecretVideo;
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
        $id = $idIframe = 1;

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

        iframe::create([
            'id_video'      => $id,
            'embed_link_1'  => '<iframe width="100%" height="450" src="https://www.youtube.com/embed/IbMZvpSzvJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_1' => 'YOUTUBE',
        ]);

        iframevideo::create([
            'id_video' => $id,
            'id_iframe' => $idIframe
        ]);

        $kd = new KingdomnvhaiVideos;
        $idCount = $kd->index($id, $idIframe);

        $id = $idCount['id'];
        $idIframe = $idCount['idIframe'];

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

        iframe::create([
            'id_video'      => $id,
            'embed_link_1'  => '<video controls preload src="http://kingdomnvhai.info/upload/video/can-you-read-this-i-can-read-it.mp4" width="100%"></video>',
            'source_link_1' => 'KINGDOM NVHAI',
        ]);

        $idIframe++;
        iframevideo::create([
            'id_video' => $id,
            'id_iframe' => $idIframe
        ]);




        // $id++;
        // videos::create([
        //     'name_vi_video' => 'Tại sao người phụ nữ Nhật Bản này kết hôn với diễn viên phim người lớn?',
        //     'name_en_video' => 'Why This Japanese Woman Got Married to Porn Actor?',
        //     // 'name_jp_video' => 'Why This Japanese Woman Got Married to Porn Actor?',

        //     'url_video' => 'why-this-japanese-woman-got-married-to-porn-actor',

        //     'description_vi_video' => '',

        //     'description_en_video' => 'Help Nobita cover the Japan&apos;s issues: https://find-your-love.tsubasakaiser.com/index.html',
        //     // 'description_jp_video' => 'Team 1',

        //     'date_video' => '2020-01-10',
        //     'thumbnail_video' => 'why-this-japanese-woman-got-married-to-porn-actor-thumbnail.jpg',
        //     'id_channel' => CHANNEL_NOBITA_FROM_JAPAN,
        // ]);

        // iframe::create([
        //     'id_video'      => $idCount['id'],
        //     'embed_link_1'  => '<iframe width="100%" height="450" src="https://www.youtube.com/embed/UFJOQFFtqrw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        //     'source_link_1' => 'YOUTUBE',
        // ]);

        // $idIframe++;
        // iframevideo::create([
        //     'id_video' => $idCount['id'],
        //     'id_iframe' => $idIframe
        // ]);


        $id++;
        videos::create([
            'name_vi_video' => 'Shiny Smily Story BGM | Hololive Pixel Festival/運動会',
            'name_en_video' => 'Shiny Smily Story BGM | Hololive Pixel Festival/運動会',
            // 'name_jp_video' => 'Shiny Smily Story BGM | Hololive Pixel Festival/運動会',

            'url_video' => 'shiny-smily-story-bgm-hololive-pixel-festival',

            'description_vi_video' => '<p>Original Source: https://twitter.com/kaynimatic/status/1331909336340172801</p>
<p>Animation: https://twitter.com/kaynimatic</p>
<p>Song: https://twitter.com/corson31</p>
',

            'description_en_video' => 'Description Eng',
            // 'description_jp_video' => 'Team 1',

            'date_video' => '2020-11-26',
            'thumbnail_video' => 'shiny-smily-story-bgm-hololive-pixel-festival-thumbnail.jpg',
            'id_channel' => CHANNEL_HOLOLIVE,
        ]);

        iframe::create([
            'id_video'      => $id,
            'embed_link_1'  => '<video width="100%" poster="http://kingdomnvhai.info/upload/images/video/shiny-smily-story-bgm-hololive-pixel-festival-thumbnail.jpg" controls preload>
<source src="http://localhost/newskingdom2021/public/upload/video/hololive-festival-pixel.mp4" type="video/mp4">
<source src="http://localhost/newskingdom2021/public/upload/video/hololive-festival-pixel.webm" type="video/webm">
Your browser does not support the video tag.
</video>',
            'source_link_1' => 'KINGDOM NVHAI',
            'embed_link_2'  => '<iframe width="100%" height="450" src="https://www.youtube.com/embed/g0tMoxlmk5Y" title="Shiny Smily Story BGM | Hololive Pixel Festival" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_2' => 'YOUTUBE',
        ]);

        $idIframe++;
        iframevideo::create([
            'id_video' => $id,
            'id_iframe' => $idIframe
        ]);

        $id++;
        videos::create([
            'name_vi_video' => '【#SorAZ】だんご大家族【ときのそらAZKi】Dango Daikazoku',
            'name_en_video' => '【#SorAZ】Tokino Sora and AZKi sing Dango Daikazoku',
            // 'name_jp_video' => '【#SorAZ】だんご大家族【ときのそらAZKi】Dango Daikazoku',

            'url_video' => 'tokino-sora-azki-dango-daikazoku',

            'description_vi_video' => '<p><strong>【#SorAZ】だんご大家族【ときのそらAZKi】Dango Daikazoku</strong></p>

<p>Đây là video được đăng trên kênh của Tokino Sora. Tuy nhiên, nó đã bị chuyển qua chế độ private sau khi Hololive bị Nintendo Japan kiện do đăng tải những nội dung của Nintendo Japan mà chưa qua ký hợp đồng.</p>
',
            'description_en_video' => '<p><strong>【#SorAZ】だんご大家族【ときのそらAZKi】Dango Daikazoku</strong></p>

<p>This is video on Tokino Sora channel. However, it was made private after Hololive was sued by Nintendo Japan for publishing unsigned Nintendo Japan content.</p>
',
            // 'description_jp_video' => '<p><strong>【#SorAZ】だんご大家族【ときのそらAZKi】Dango Daikazoku</strong></p>',

            'date_video' => '2020-08-10',
            'thumbnail_video' => 'tokino-sora-azki-dango-daikazoku-thumbnail.jpg',
            'id_channel' => CHANNEL_HOLOLIVE,
        ]);

        iframe::create([
            'id_video'      => $id,
            'embed_link_1'  => '<iframe width="100%" height="450" src="https://www.youtube.com/embed/yTk4iNGCX1I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_1' => 'YOUTUBE',
            'embed_link_2'  => '',
            'source_link_2' => 'KINGDOM NVHAI',
        ]);

        $idIframe++;
        iframevideo::create([
            'id_video' => $id,
            'id_iframe' => $idIframe
        ]);




















        $secret = new SecretVideo;
        $idCount = $secret->index($idIframe);

    }
}




// Pewdiepie Is BANNED in China LWIAY https://www.youtube.com/watch?v=8HehfOtRbUk pewdiepie-is-BANNED-in-China-LWIAY-0096
