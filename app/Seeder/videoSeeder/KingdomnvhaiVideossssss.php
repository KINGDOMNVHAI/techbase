<?php
namespace App\Seeder\videoSeeder;

use App\Models\iframe;
use App\Models\iframevideo;
use App\Models\videos;
use DB;
use Illuminate\Support\ServiceProvider;

class KingdomnvhaiVideossssss
{
    public function index()
    {
		$id++;
        videos::create([
            'name_vi_video' => 'Infinite Stratos 2期 ED BEAUTIFUL SKY全員ライブ',
            'name_en_video' => 'Infinite Stratos 2 ED BEAUTIFUL SKY',
            // 'name_jp_video' => 'Infinite Stratos 2期 ED BEAUTIFUL SKY全員ライブ',

            'url_video' => 'infinite-stratos-2-ed-beautiful-sky',

            'description_vi_video' => '<p><strong>Infinite Stratos 2期 ED BEAUTIFUL SKY全員ライブ</strong></p>
<p>Ca sĩ: các diễn viên lồng tiếng</p>

<ul>
<li>Shinonono Houki - Hikasa Yoko
<li>Cecilia Alcott - Yukana
<li>Huang Lingyin - Shimoda Asami
<li>Charlotte Dunois - Hanazawa Kana
<li>Laura Bodewig - Inoue Marina
<li>Sarashiki Kanzashi - Mimori Suzuko
<li>Sarashiki Tatenashi - Saito Chiwa
<li>Orimura Ichika - Uchiyama Kouki
</ul>
',

            'description_en_video' => '<p><strong>Infinite Stratos 2 ED BEAUTIFUL SKY</strong></p>
<p>Singer: voice actor.</p>

<ul>
<li>Shinonono Houki - Hikasa Yoko
<li>Cecilia Alcott - Yukana
<li>Huang Lingyin - Shimoda Asami
<li>Charlotte Dunois - Hanazawa Kana
<li>Laura Bodewig - Inoue Marina
<li>Sarashiki Kanzashi - Mimori Suzuko
<li>Sarashiki Tatenashi - Saito Chiwa
<li>Orimura Ichika - Uchiyama Kouki
</ul>
',
//             'description_jp_video' => '<p><strong>Infinite Stratos 2期 ED BEAUTIFUL SKY全員ライブ</strong></p>
// <p>歌手: 声優</p>

// <ul>
// <li>Shinonono Houki - Hikasa Yoko
// <li>Cecilia Alcott - Yukana
// <li>Huang Lingyin - Shimoda Asami
// <li>Charlotte Dunois - Hanazawa Kana
// <li>Laura Bodewig - Inoue Marina
// <li>Sarashiki Kanzashi - Mimori Suzuko
// <li>Sarashiki Tatenashi - Saito Chiwa
// <li>Orimura Ichika - Uchiyama Kouki
// </ul>
// ',

            'date_video' => '2015-11-25',
            'thumbnail_video' => 'infinite-stratos-2-ed-beautiful-sky-thumbnail.jpg',
            'id_channel' => CHANNEL_KINGDOM_NVHAI,
        ]);

        iframevideo::create([
            'id_video'      => $id,
            'embed_link_1'  => '<iframe width="560" height="315" src="https://www.youtube.com/embed/5ma2UdRPYmg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_1' => 'YOUTUBE',
        ]);

        $id++;
        videos::create([
            'name_vi_video' => 'Infinite Stratos Drama CD 1',
            'name_en_video' => 'Infinite Stratos Drama CD 1',
            // 'name_jp_video' => 'Infinite Stratos Drama CD 1',

            'url_video' => 'infinite-stratos-drama-cd-1',

            'description_vi_video' => '<p><strong>Infinite Stratos Drama CD 1</strong></p>
        <p></p>
        ',

            'description_en_video' => 'Description Eng',
            // 'description_jp_video' => 'description_jp_video',

            'date_video' => '2015-12-01',
            'thumbnail_video' => 'infinite-stratos-drama-cd-1-thumbnail.jpg',
            'id_channel' => CHANNEL_KINGDOM_NVHAI,
        ]);

        iframevideo::create([
            'id_video'      => $id,
            'embed_link_1'  => '',
            'source_link_1' => 'KINGDOM NVHAI',
        ]);
    }
}
