<?php

use App\Models\iframevideo;
use Illuminate\Database\Seeder;

class IframeVideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        iframevideo::create([
            'id_video'      => 1,
            'embed_link_1'  => '<iframe width="560" height="315" src="https://www.youtube.com/embed/IbMZvpSzvJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_1' => 'YOUTUBE',
        ]);

        iframevideo::create([
            'id_video'      => 2,
            'embed_link_1'  => '<video src="http://kingdomnvhai.info/upload/video/Date a Dance 2  デートアダンス II DATE A LIVE デートアライブ.mp4" width="100%" controls></video>',
            'source_link_1' => 'KINGDOM NVHAI',
        ]);

        iframevideo::create([
            'id_video'      => 3,
            'embed_link_1'  => '<video src="http://kingdomnvhai.info/upload/video/MMD vs Witch RPG Battle Style Movie.mp4" width="100%" controls></video>',
            'source_link_1' => 'KINGDOM NVHAI',
        ]);

        iframevideo::create([
            'id_video'      => 4,
            'embed_link_1'  => '<video src="http://kingdomnvhai.info/upload/video/「鰊」←これみんな読める？...私は読めますけどww.flv" width="100%" controls></video>',
            'source_link_1' => 'KINGDOM NVHAI',
        ]);

        iframevideo::create([
            'id_video'      => 5,
            'embed_link_1'  => '<video src="http://kingdomnvhai.info/upload/video/Hololive Festival Pixel.mp4" width="100%" controls></video>',
            'source_link_1' => 'KINGDOM NVHAI',
            'embed_link_2'  => '<iframe width="560" height="315" src="https://www.youtube.com/embed/g0tMoxlmk5Y" title="Shiny Smily Story BGM | Hololive Pixel Festival" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_2' => 'YOUTUBE',
        ]);

    }
}
