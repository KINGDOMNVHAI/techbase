<?php
namespace App\Seeder\videoSeeder;

use App\Models\iframe;
use App\Models\iframevideo;
use App\Models\videos;
use DB;
use Illuminate\Support\ServiceProvider;

class KingdomnvhaiVideos
{
    public function index($id, $idIframe)
    {
        $id++;
        videos::create([
            'name_vi_video' => 'Date a Dance 2  デートアダンス II DATE A LIVE デートアライブ',
            'name_en_video' => 'Date a Dance 2  デートアダンス II DATE A LIVE デートアライブ',
            // 'name_jp_video' => 'Date a Dance 2  デートアダンス II DATE A LIVE デートアライブ',

            'url_video' => 'date-a-dance-2',

            'description_vi_video' => '<p>Sau 2 năm, Date a dance 2 tiếp tục được ra mắt mừng sinh nhật KINGDOM NVHAI lần 3.</p>',

            'description_en_video' => 'Description Eng',
            // 'description_jp_video' => 'description_jp_video',

            'date_video' => '2018-07-01',
            'thumbnail_video' => 'date-a-dance-2-thumbnail.jpg',
            'id_channel' => CHANNEL_KINGDOM_NVHAI,
        ]);

        iframe::create([
            'id_video'      => $id,
            'embed_link_1'  => '<video controls preload width="100%">
<source src="http://kingdomnvhai.info/upload/video/date-a-dance-2.mp4" type="video/mp4">
</video>',
            'source_link_1' => 'KINGDOM NVHAI',
        ]);

        $idIframe++;
        iframevideo::create([
            'id_video' => $id,
            'id_iframe' => $idIframe
        ]);

        $id++;
        videos::create([
            'name_vi_video' => 'Senran Kagura Estival Versus Sunshine Fes OP Vietsub Engsub',
            'name_en_video' => 'Senran Kagura Estival Versus Sunshine Fes OP Vietsub Engsub',
            // 'name_jp_video' => 'Senran Kagura Estival Versus Sunshine Fes OP Vietsub Engsub',
            'url_video' => 'senran-kagura-estival-versus-op',

            'description_vi_video' => '<p>Senran Kagura Estival Versus Sunshine Fes Vietsub Engsub</p>
<p>Senran Kagura Estival Versus là game hành động 3D dành cho hệ máy PS4 và PSVita, sản xuất bởi Tamsoft và phát hành bởi Marvelous Entertainment. Game được ra mắt vào 26/3/2015 tại Nhật Bản, 15/3/2016 tại Bắc Mỹ và 18/3/2016 tại Châu Âu.</p>
<p>Đây là tựa game thứ 7 của series. Sunshine Fes là nhạc mở đầu của game Senran Kagura Estival Versus.</p>
',

            'description_en_video' => '<p>閃乱カグラ ESTIVAL VERSUS</p>
<p>The intro/opening to Senran Kagura Estival Versus</p>
',
            // 'description_jp_video' => '<p>閃乱カグラ ESTIVAL VERSUS</p>',

            'date_video' => '2016-10-26',
            'thumbnail_video' => 'senran-kagura-estival-versus-op-thumbnail.jpg',
            'id_channel' => CHANNEL_KINGDOM_NVHAI,
        ]);

        iframe::create([
            'id_video'      => $id,
            'embed_link_1'  => '<iframe width="100%" height="450" src="https://www.youtube.com/embed/vKntzXUhXss" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_1' => 'KINGDOM NVHAI',
        ]);

        $idIframe++;
        iframevideo::create([
            'id_video' => $id,
            'id_iframe' => $idIframe
        ]);





        $id++;
        videos::create([
            'name_vi_video' => 'Senran Kagura Estival Versus Vietsub Tập 1 Chị gái hồi sinh',
            'name_en_video' => 'Senran Kagura Estival Versus ep1 Sister Revival',
            // 'name_jp_video' => 'Senran Kagura Estival Versus Vietsub Tập 1 Chị gái hồi sinh',
            'url_video' => 'senran-kagura-estival-versus-sister-revival',

            'description_vi_video' => '<p>Senran Kagura Estival Versus Vietsub Tập 1 Bắt đầu</p>
<p>Các linh hồn Shinobi đã khuất được hồi sinh, trong đó có Ryouki, chị của Ryoubi và Ryouna.</p>
<p>Senran Kagura: Estival Versus là game của hãng Marvelous, được phát hành vào ngày  26/3/2015. Series game Senran Kagura bắt đầu từ năm 2012. Phiên bản mới nhất là Senran Kagura Peach Beach Splash.</p>
',

            'description_en_video' => 'Description Eng',
            // 'description_jp_video' => 'description_jp_video',

            'date_video' => '2017-04-01',
            'thumbnail_video' => 'senran-kagura-estival-versus-sister-revival-thumbnail.jpg',
            'id_channel' => CHANNEL_KINGDOM_NVHAI,

            // https://www.youtube.com/watch?v=hxY99J_OMtg
        ]);

        iframe::create([
            'id_video'      => $id,
            'embed_link_1'  => '<iframe width="100%" height="450" src="https://www.youtube.com/embed/AfrFi3pf3rY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_1' => 'KINGDOM NVHAI',
        ]);

        $idIframe++;
        iframevideo::create([
            'id_video' => $id,
            'id_iframe' => $idIframe
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

        iframe::create([
            'id_video'      => $id,
            'embed_link_1'  => '<video controls preload width="100%">
<source src="http://kingdomnvhai.info/upload/video/mmd-vs-witch-rpg-battle-style-movie-vietsub.mp4" type="video/mp4">
</video>',
            'source_link_1' => 'KINGDOM NVHAI',
        ]);

        $idIframe++;
        iframevideo::create([
            'id_video' => $id,
            'id_iframe' => $idIframe
        ]);

        $id++;
        videos::create([
            'name_vi_video' => 'Date a live Ren Distopia Vietsub Origami điều ước 3 thiên thần biến thái và ác quỷ trong sáng',
            'name_en_video' => 'Date a live Ren Distopia Vietsub Origami third wish',
            // 'name_jp_video' => 'Date a live Ren Distopia Vietsub Origami điều ước 3 thiên thần biến thái và ác quỷ trong sáng',

            'url_video' => 'date-a-live-ren-distopia-origami-wish-3',

            'description_vi_video' => '<p>Origami và Tobiichi-san, mỗi người một điều ước. Và kết quả y như trong truyện Dragon Ball</p>

<p>Ren Dystopia: <a href="https://www.compileheart.com/date/ren/" target="_blank">https://www.compileheart.com/date/ren/</a></p>
<p>Date a live III: <a href="http://date-a-live-anime.com/" target="_blank">http://date-a-live-anime.com/</a></p>
',

            'description_en_video' => 'description EN',
            // 'description_jp_video' => 'Team 1',

            'date_video' => '2020-07-01',
            'thumbnail_video' => 'date-a-live-ren-distopia-origami-wish-3-thumbnail.jpg',
            'id_channel' => CHANNEL_KINGDOM_NVHAI,
        ]);

        iframe::create([
            'id_video'      => $id,
            'embed_link_1'  => '<iframe width="100%" height="450" src="https://www.youtube.com/embed/kd9Sglld1Qw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_1' => 'YOUTUBE',
        ]);

        $idIframe++;
        iframevideo::create([
            'id_video' => $id,
            'id_iframe' => $idIframe
        ]);

        $id++;
        videos::create([
            'name_vi_video' => 'Yandere Hell ep1 CLB bạn thuở nhỏ',
            'name_en_video' => 'Yandere Hell ep1 CLB childhood',
            // 'name_jp_video' => 'Yandere Hell ep1 CLB bạn thuở nhỏ',

            'url_video' => 'yandere-hell-ep1-club-childhood',

            'description_vi_video' => '<p>MY HAREM HEAVEN IS YANDERE HELL</p>
<p>ハーレム天国だと思ったらヤンデレ地獄だった。</p>
<p>Harem Tengoku Da To Omottara Yandere Jigoku Datta. </p>
<p>Thiên đường harem của tôi là địa ngục Yandere</p>
<p>Một câu chuyện KINGDOM NVHAI dự đoán đây sẽ là siêu phẩm, nhất là với những ai thích thể loại anime Yandere, bạn thuở nhỏ, trinh thám, kinh dị.</p>

<p>CLB Nghiên Cứu Lịch Sử Khu Vực gồm 4 người bạn thuở nhỏ.<br>
Họ có liên quan đến "lịch sử khu vực" là một vụ án mạng.<br>
Từ vụ án đó, 3 cô gái yêu nam chính Kisaragi Yuuya.</p>
',

            'description_en_video' => 'description EN',
            // 'description_jp_video' => 'Team 1',

            'date_video' => '2020-06-01',
            'thumbnail_video' => 'yandere-hell-ep1-club-childhood-thumbnail.jpg',
            'id_channel' => CHANNEL_KINGDOM_NVHAI,
        ]);

        iframe::create([
            'id_video'      => $id,
            'embed_link_1'  => '<iframe width="100%" height="450" src="https://www.youtube.com/embed/kbI_HTTsGGk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_1' => 'YOUTUBE',
        ]);

        $idIframe++;
        iframevideo::create([
            'id_video' => $id,
            'id_iframe' => $idIframe
        ]);

        $id++;
        videos::create([
            'name_vi_video' => 'Yandere Hell ep2 phán quyết của hội học sinh',
            'name_en_video' => 'Yandere Hell ep2 judgement of student council',
            // 'name_jp_video' => 'Yandere Hell ep2 phán quyết của hội học sinh',

            'url_video' => 'yandere-hell-ep2-judgement-of-student-council',

            'description_vi_video' => '<p>MY HAREM HEAVEN IS YANDERE HELL</p>
<p>ハーレム天国だと思ったらヤンデレ地獄だった。</p>
<p>Harem Tengoku Da To Omottara Yandere Jigoku Datta. </p>
<p>Thiên đường harem của tôi là địa ngục Yandere</p>
<p>Một câu chuyện KINGDOM NVHAI dự đoán đây sẽ là siêu phẩm, nhất là với những ai thích thể loại anime Yandere, bạn thuở nhỏ, trinh thám, kinh dị.</p>

<p>CLB Nghiên Cứu Lịch Sử Khu Vực bị hội trưởng hội học sinh ép phải giải tán vì lý do không có hoạt động gì trong CLB.</p>
',

            'description_en_video' => 'description EN',
            // 'description_jp_video' => 'Team 1',

            'date_video' => '2020-07-02',
            'thumbnail_video' => 'yandere-hell-ep2-judgement-of-student-council-thumbnail.jpg',
            'id_channel' => CHANNEL_KINGDOM_NVHAI,
        ]);

        iframe::create([
            'id_video'      => $id,
            'embed_link_1'  => '<iframe width="100%" height="450" src="https://www.youtube.com/embed/HKcVNz1TOHQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'source_link_1' => 'YOUTUBE',
        ]);

        $idIframe++;
        iframevideo::create([
            'id_video' => $id,
            'id_iframe' => $idIframe
        ]);







        $idCount = [
            'id' => $id,
            'idIframe' => $idIframe
        ];

        return $idCount;
    }
}
