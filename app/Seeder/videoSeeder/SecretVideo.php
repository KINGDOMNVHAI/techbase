<?php
namespace App\Seeder\videoSeeder;

use App\Models\iframe;
use App\Models\iframevideo;
use App\Models\secretvideos;
use DB;
use Illuminate\Support\ServiceProvider;

class SecretVideo
{
    public function index($idIframe)
    {
        $id = 1;
        secretvideos::create([
            'name_vi_secretvideo' => '[Hội nữ sinh Onsen] "Mount View Hakone" ở khu Sengokuhara ♪ Một ngày đi tắm / tắm ngoài trời riêng',
            'name_en_secretvideo' => '[Hot Spring Girl] "Mount View Hakone" in Sengokuhara ♪ One-day bath / private open-air bath',
            // 'name_jp_secretvideo' => '【温泉女子会】箱根仙石原「マウントビュー箱根」さん♪日帰り入浴・貸切露天風呂',

            'url_video' => 'onsen-girl-mount-view-hakone-sengokuhara',

            'description_vi_secretvideo' => '<p>Chúng tôi mở website phiên bản tiếng Anh. [Cẩm nang suối nước nóng Nhật Bản]: <a href="https://www.patreon.com/japanonsenguide">https://www.patreon.com/japanonsenguide</a></p>
<p>Chúng tôi giới thiệu sự hấp dẫn của Onsen (Phòng tắm riêng ngoài trời) đến với mọi người trên toàn thế giới.</p>
<p>Trang chủ của Mount View Hakone: <a href="https://www.mvhakone.jp/">https://www.mvhakone.jp/</a></p>
',

            'description_en_secretvideo' => '<p>We opened English version website. [JAPAN ONSEN GUIDE]: <a href="https://www.patreon.com/japanonsenguide">https://www.patreon.com/japanonsenguide</a></p>
<p>We introduce the appeals of Onsen (Private open-air bath) to people all over the world.</p>
<p>Home Page of Mount View Hakone: <a href="https://www.mvhakone.jp/">https://www.mvhakone.jp/</a></p>
',

            // 'description_jp_secretvideo' => '<p>マウントビュー箱根公式HP: <a href="https://www.mvhakone.jp/"></a></p>
            // <p>Twitter: <a href="https://twitter.com/hotspring_girls">https://twitter.com/hotspring_girls</a></p>
            // <p>Patreon: https://t.co/TRbxNMJoAw?amp=1</p>',

            'date_secretvideo' => '2017-05-11',
            'thumbnail_secretvideo' => 'onsen-girl-mount-view-hakone-sengokuhara-thumbnail.jpg',
            'id_channel' => 'UCqvaqxGePQWvXMAi9-524uA',
        ]);

        iframe::create([
            'id_video'      => $id,
            'embed_link_1'  => '<iframe width="100%" height="450" src="https://www.youtube.com/embed/sc0cWIsqQXI" title="Hot Spring Girl Mount View Hakone" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_1' => 'YOUTUBE',
        ]);

        $idIframe++;
        iframevideo::create([
            'id_video'      => $id,
            'id_iframe'     => $idIframe,
            'secret_video'  => true,
        ]);
    }
}
