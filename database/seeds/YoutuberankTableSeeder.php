<?php

use App\Model\youtuberank;
use Illuminate\Database\Seeder;

class YoutuberankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        youtuberank::create([
            'id_channel'        => 'UCxUL0zS-XiU36bkUsr5dWbg',
            'name_channel'      => 'KINGDOM NVHAI',
            'url_channel'       => 'https://www.youtube.com/channel/UCxUL0zS-XiU36bkUsr5dWbg?sub_confirmation=1',
            'url_video'         => 'https://youtu.be/hxY99J_OMtg',
            'thumbnail_channel' => 'kingdom-nvhai-channel-thumbnail.jpg',
            'description'       => "Là kênh Youtube duy nhất của trang web này. Được xây dựng và ra mắt vào 1/7/2015 khi NVHAI là sinh viên năm cuối, kênh Youtube chuyên dịch các Visual Novel sang phụ đề tiếng Việt. Trong tương lai, các video sẽ được dịch sonh song tiếng Anh và tiếng Việt để thu hút thêm nhiều khán giả trên thế giới. Ngoài dịch Visual Novel, KINGDOM NVHAI còn hướng dẫn Photoshop, Premiere Pro và lập trình.",
            'enable'            => 1,
            'favorite'          => 1,
            'visual_novel'      => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UC-lHJZR3Gqxm24_Vd_AJ5Yw',
            'name_channel'      => 'Pewdiepie',
            'url_channel'       => 'https://www.youtube.com/user/PewDiePie',
            'url_video'         => 'https://youtu.be/PHgc8Q6qTjc',
            'thumbnail_channel' => 'pewdiepie-channel-thumbnail.jpg',
            'description'       => "Ông Hoàng Youtube với lượt subcribe cao nhất thế giới nổi tiếng với chơi game, diễn hài, thích anime. PewDiePie là người Thụy Điển, có bạn gái Marzia và thường cộng tác với Jacksepticeye và các Youtuber nổi tiếng nhất thế giới khác. Dù hiện tại, số lượng subcribe của PewDiePie đã là hạng nhì sau khi bị T-Series soán ngôi vào tháng 4/2019, nhưng với nhiều khán giả, PewDiePie vẫn là Youtuber thành công nhất thế giới.",
            'enable'            => 1,
            'favorite'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCmo55h1NKPRnxiU21b4AHFg',
            'name_channel'      => '虹のコンキスタドール - Niji No Conquistador',
            'url_channel'       => 'https://www.youtube.com/channel/UCmo55h1NKPRnxiU21b4AHFg',
            'url_video'         => 'https://youtu.be/_uYTSn6Pyak',
            'thumbnail_channel' => 'niji-no-conquistador-channel-thumbnail.jpg',
            'description'       => "Nhóm Idol khá nổi tiếng của Nhật Bản được thành lập năm 2014. Thành viên trẻ tuổi nhất sinh năm 2004 Hiruta Airi. Các thành viên nổi tiếng nhất nhóm là Nemoto Nagi, Moe Tsurumi, Akari Nakamura, Karin Matoba, Ao Yamato. Đặc biệt, Nemoto Nagi là thành viên gánh team và đang hoạt động cho Dempagumi.inc.
            <br>Trang chủ: <a href='https://2zicon.tokyo/' target='_blank' >2zicon</a>",
            'fan_count'         => 57055,
            'enable'            => 1,
            'favorite'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UC4YaOt1yT-ZeyB0OmxHgolA',
            'name_channel'      => 'A.I Channel',
            'url_channel'       => 'https://www.youtube.com/channel/UC4YaOt1yT-ZeyB0OmxHgolA',
            'url_video'         => 'https://youtu.be/RvB-kv9q7Pk',
            'thumbnail_channel' => 'kizuna-ai-channel-thumbnail.jpg',
            'description'       => "Virtual Youtuber thành công nhất hiện tại. Cô là Youtuber ảo có đồ họa đẹp nhất và nội dung phong phú. Kizuna AI có tính cách vui vẻ, ngốc nghếch. Đặc biệt, cô có những bài hát nổi tiếng của riêng mình như AIAIAI hay những bản cover như Hej Monika của PewDiePie. Cô ủng hộ PewDiePie và mong muốn được cộng tác với anh.",
            'fan_count'         => 2612489,
            'enable'            => 1,
            'favorite'          => 1,
            'virtual_youtuber'  => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCdOWyp25T0HDtjpnV2LpIyw',
            'name_channel'      => 'EpicSkillshot - LoL VOD Library',
            'url_channel'       => 'https://www.youtube.com/user/EpicSkillshot',
            'url_video'         => 'https://youtu.be/cHR9kPCKrc4',
            'thumbnail_channel' => 'epicskillshot-channel-thumbnail.jpg',
            'description'       => "Đây là trang tổng hợp tất cả trận đấu LMHT của các giải đấu lớn như LCK, LPL, LMS, LCS... ",
            'enable'            => 1,
            'favorite'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UC8dwPSQ5DOJGtwhmcNhNjSw',
            'name_channel'      => '講談社ヤンマガch',
            'url_channel'       => 'https://www.youtube.com/user/yanmagach',
            'url_video'         => 'https://youtu.be/oNIxrK5yGwI',
            'thumbnail_channel' => 'yanmagach-channel-thumbnail.jpg',
            'enable'            => 1,
            'favorite'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCXxxdMSiRrPWBnMKu6Q9DgQ',
            'name_channel'      => '최하급번역기',
            'url_channel'       => 'https://www.youtube.com/channel/UCXxxdMSiRrPWBnMKu6Q9DgQ',
            'url_video'         => 'https://youtu.be/twbMw9pv8vY',
            'thumbnail_channel' => 'date-a-live-korea-channel-thumbnail.jpg',
            'description'       => "Là kênh Youtube dịch anime qua tiếng Hàn. Trong đây có trọn bộ bản dịch tiếng Hàn Date a live. NVHAI dịch Date a live dựa trên kênh này là chủ yếu.",
            'enable'            => 1,
            'favorite'          => 1,
            'visual_novel'      => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCdV9tn79v3ecSDpC1AjVKaw',
            'name_channel'      => 'Phạm Huy Hoàng - Tôi Đi Code Dạo',
            'url_channel'       => 'https://www.youtube.com/channel/UCdV9tn79v3ecSDpC1AjVKaw',
            'url_video'         => 'https://youtu.be/E8I5fJ0xCjA',
            'thumbnail_channel' => 'pham-huy-hoang-channel-thumbnail.jpg',
            'description'       => "Tôi Đi Code Dạo là một bloger nổi tiếng do anh Phạm Huy Hoàng tạo nên để chia sẻ kinh nghiệm trong ngành lập trình. Anh hiện đang làm việc ở Singapore. Bạn anh là thầy Song hiện đang mở trung tâm tin học Cybersoft và anh thường đến để gặp mặt các bạn sinh viên, những người đang theo học tại trung tâm.",
            'enable'            => 1,
            'favorite'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCeZje_7vr6CPK9vPQDfV3WA',
            'name_channel'      => 'Syrex',
            'url_channel'       => 'https://www.youtube.com/channel/UCeZje_7vr6CPK9vPQDfV3WA',
            'url_video'         => 'https://youtu.be/8N_aay0ddcY',
            'thumbnail_channel' => 'syrex-channel-thumbnail.jpg',
            'description'       => "Trang nghe nhạc Nightcore. NVHAI ấn tượng với bài RISE và bài DARKSIDE",
            'enable'            => 1,
            'favorite'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCMYtONm441rBogWK_xPH9HA',
            'name_channel'      => 'Mirai Akari Project',
            'url_channel'       => 'https://www.youtube.com/user/bittranslate',
            'url_video'         => 'https://youtu.be/I8ZBYReOEsg',
            'thumbnail_channel' => 'mirai-akari-channel-thumbnail.jpg',
            'description'       => "Đối với NVHAI, Mirai Akari cũng xứng đáng là đối thủ của Kizuna AI. Đồ họa của cô cũng khá đẹp. Tính cách cũng vui vẻ và ngốc nghếch như Kizuna AI. Có 2 điểm khác biệt với Kizuna là: không gian của cô là vườn cây có nhà, có hoa lá cành, khác với Kizuna là không gian ảo trắng xóa. Và cô đôi lúc nói chuyện về ngực nên kênh này có lẽ chỉ nên dành cho +13",
            'enable'            => 1,
            'favorite'          => 1,
            'virtual_youtuber'  => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCUZNK80DemBN3kyxusDLwrA',
            'name_channel'      => 'The Soul of Wind',
            'url_channel'       => 'https://www.youtube.com/user/Fantasyssmusic',
            'url_video'         => 'https://youtu.be/TJ1dEGTGBlk',
            'thumbnail_channel' => 'the-soul-of-wind-channel-thumbnail.jpg',
            'description'       => "Kênh Youtube chuyên đăng các bản nhạc không lời cover từ các bài hát nổi tiếng như Kimi no nawa, Lion King... Video nhiều lượt xem nhất của kênh đạt 35 triệu views. Các bản nhạc nhẹ nhàng, sâu lắng, thích hợp cho những ai cần tập trung làm việc, học tập.",
            'enable'            => 1,
            'favorite'          => 1,
            'virtual_youtuber'  => 0,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCh_ugKacslKhsGGdXP0cRRA',
            'name_channel'      => 'Naomi "SexyCyborg" Wu',
            'url_channel'       => 'https://www.youtube.com/channel/UCh_ugKacslKhsGGdXP0cRRA',
            'url_video'         => 'https://youtu.be/DLXrGZ0xxY0',
            'thumbnail_channel' => 'Naomi-SexyCyborg-Wu-channel-thumbnail.jpg',
            'description'       => "Naomi Wu là cô gái đến từ Thâm Quyến, Trung Quốc. Với bộ ngực silicon đầy gợi cảm cùng chủ đề liên quan đến công nghệ, cô đã thu hút về gần 1 triệu lượt subcribe. Video của cô xoay quanh các đồ chơi công nghệ như camera 360, bàn chải đánh răng máy. Cô tự nhận mình là SexyCybor",
            'enable'            => 1,
            'favorite'          => 1,
            'virtual_youtuber'  => 0,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCCvt0Jc0ghFegppbyRdMPTg',
            'name_channel'      => 'Ririchiyo咬人猫',
            'url_channel'       => 'https://www.youtube.com/channel/UCCvt0Jc0ghFegppbyRdMPTg',
            'url_video'         => 'https://www.youtube.com/watch?v=Cf5Lk37fCaU',
            'thumbnail_channel' => 'ririchiyo-channel-thumbnail.jpg',
            'description'       => "Ririchiyo Neko là một nữ vũ công người Trung Quốc. Cô có nhiều video múa rất đẹp. 2 video hơn 1 triệu view của cô là Tougen Renka và cover AIAIAI của KizunaAI.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 0,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCW0GGjRL0zDhTLg18iHstng',
            'name_channel'      => 'Ask Me Why - Hiểu Biết Hơn Mỗi Ngày',
            'url_channel'       => 'https://www.youtube.com/channel/UCW0GGjRL0zDhTLg18iHstng',
            'url_video'         => 'https://www.youtube.com/watch?v=pRequF1oDIQ',
            'thumbnail_channel' => 'ask-me-why-channel-thumbnail.jpg',
            'description'       => "Ask Me Why - Hiểu Biết Hơn Mỗi Ngày là kênh về kiến thức. Series nổi tiếng nhất kênh là Lời Nguyền Địa Lý của các quốc gia như Việt Nam, Trung Quốc, Iran.",
            'enable'            => 1,
            'favorite'          => 1,
            'virtual_youtuber'  => 0,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCI7ktPB6toqucpkkCiolwLg',
            'name_channel'      => 'Pan Piano',
            'url_channel'       => 'https://www.youtube.com/channel/UCI7ktPB6toqucpkkCiolwLg',
            'url_video'         => 'https://youtu.be/v7vYCB19KpM',
            'thumbnail_channel' => 'pan-piano-channel-thumbnail.jpg',
            'description'       => "Pan Piano là một nghệ sĩ piano. Cô thường cosplay những nhân vật anime khi đánh bản nhạc của bộ anime đó. Bộ ngực luôn là điểm nhấn trong tất cả bản nhạc của cô.",
            'enable'            => 1,
            'favorite'          => 1,
            'visual_novel'      => 0,
        ]);

        // ============== Non Favorite ==============

        youtuberank::create([
            'id_channel'        => 'UCvqRdlKsE5Q8mf8YXbdIJLw',
            'name_channel'      => 'LoL Esports',
            'url_channel'       => 'https://www.youtube.com/user/LoLChampSeries/featured',
            'url_video'         => 'https://www.youtube.com/watch?v=5grmasNa15c',
            'thumbnail_channel' => 'lol-esport-channel-thumbnail.jpg',
            'description'       => "Kênh chính thức của Riot Games dành cho trò chơi League of Legends.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 0,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCUFNaNGi3lnBPq4gtdfJCAA',
            'name_channel'      => 'INFINI HD 4K',
            'url_channel'       => 'https://www.youtube.com/user/dan201',
            'url_video'         => 'https://www.youtube.com/watch?v=XpnpsKgaTKM&list=PL5N5Hv3klahFQ0NIEJSwvUGHdWoP7VbHe&index=12',
            'thumbnail_channel' => 'infiti-hd-4k-channel-thumbnail.jpg',
            'description'       => "Kênh chuyên chiếu sự kiện dành cho người lớn tại Trung Quốc. KINGDOM NVHAI thích kênh này vì một video cosplay Yoshino và Kurumi trong Date a live.",
            'enable'            => 1,
            'favorite'          => 0,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCX4N3DioqqrugFeilxTkSIw',
            'name_channel'      => 'BHGaming',
            'url_channel'       => 'https://www.youtube.com/user/BHAnimation',
            'url_video'         => 'https://www.youtube.com/watch?v=Yg5hulJkMn8',
            'thumbnail_channel' => 'bhgaming-channel-thumbnail.jpg',
            'description'       => "Khánh Mũ Đen sống tại Hà Nội. Khoảng năm 2015 - 2017 là thời điểm Khánh hoạt động mạnh, nổi tiếng với việc chơi game RPG kinh dị. Hiện giờ Khánh ít chơi game hơn và đang mở tiệm bán Vape ở Tây Hồ. Khánh đã có nút bạc Youtube vào năm 2016.",
            'enable'            => 0,
            'favorite'          => 0,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCKv8Rrrdc9oxLJmdHItafLA',
            'name_channel'      => 'ManlyBadassHero',
            'url_channel'       => 'https://www.youtube.com/user/ManlyBadassHero',
            'url_video'         => 'https://youtu.be/xZ0C64Wc8ks',
            'thumbnail_channel' => 'manlybadasshero-channel-thumbnail.jpg',
            'description'       => "Kênh này chuyên chơi game kinh dị. Mọi thể loại game kinh dị từ RPG, Visual Novel phương đông phương tây cho đến game hành động kinh dị đều được kênh Youtube này chơi, rất phù hợp với những ai đang tìm một kho game kinh dị.",
            'enable'            => 1,
            'favorite'          => 0,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCUFNaNGi3lnBPq4gtdfJCAA',
            'name_channel'      => 'VETV7 ESPORTS',
            'url_channel'       => 'https://www.youtube.com/channel/UCXF4WjTCUQSmGapnNEZzbYw',
            'url_video'         => 'https://youtu.be/mKW1S2I0_mI',
            'thumbnail_channel' => 'vetv7-channel-thumbnail.jpg',
            'description'       => "Kênh Youtube của Vietnam Esport TV, chuyên đăng video các trận đấu LMHT tại VCS từ thời Saigon Joker 2012 đến nay.",
            'enable'            => 1,
            'favorite'          => 0,
        ]);

        youtuberank::create([
            'id_channel'        => 'UC6oDys1BGgBsIC3WhG1BovQ',
            'name_channel'      => 'Shizuka Rin Official',
            'url_channel'       => 'https://www.youtube.com/channel/UC6oDys1BGgBsIC3WhG1BovQ/',
            'url_video'         => 'https://youtu.be/0QeLf_HViCQ',
            'thumbnail_channel' => 'shizuka-rin-channel-thumbnail.jpg',
            'enable'            => 1,
            'virtual_youtuber'  => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCy5lOmEQoivK5XK7QCaRKug',
            'name_channel'      => 'Yomemi',
            'url_channel'       => 'https://www.youtube.com/channel/UCy5lOmEQoivK5XK7QCaRKug',
            'url_video'         => 'https://youtu.be/sPQKzJwzXb4',
            'thumbnail_channel' => 'yomemi-channel-thumbnail.jpg',
            'description'       => "Dù đồ họa có phần thua kém so với các Virtual Youtuber top đầu, Yomemi-chan vẫn khá ổn trong việc chạy đua với các Virtual Youtuber khác. Cô được giới thiệu là một app cài vào điện thoại, máy tính và thường gọi khán giả là darling. Đôi lúc cô rủ Mirai Akari chơi PUBG và cũng là Virtual Youtuber thường nói về ngực dù cô là ngực phẳng. Gần đây, cô còn được giới thiệu trong GATE BOX, thiết bị giúp người dùng giao tiếp với nhân vật anime và có thể tự điều khiển các thiết bị trong nhà.",
            'enable'            => 1,
            'virtual_youtuber'  => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCfLsVuE0A_hUQyeCDNQelxA',
            'name_channel'      => 'NEEKO channel',
            'url_channel'       => 'https://www.youtube.com/channel/UCfLsVuE0A_hUQyeCDNQelxA',
            'url_video'         => 'https://youtu.be/6xnGonuSmRM',
            'thumbnail_channel' => 'neeko-channel-thumbnail.jpg',
            'enable'            => 1,
            'virtual_youtuber'  => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCQYADFw7xEJ9oZSM5ZbqyBw',
            'name_channel'      => 'Kaguya Luna Offical',
            'url_channel'       => 'https://www.youtube.com/channel/UCQYADFw7xEJ9oZSM5ZbqyBw',
            'url_video'         => 'https://www.youtube.com/watch?v=TeKTVFgw1hM',
            'thumbnail_channel' => 'kaguya-luna-channel-thumbnail.jpg',
            'description'       => "Nếu hỏi Virtual Youtuber nào có thể cạnh tranh với Kizuna AI thì câu trả lời là Kaguya Luna Offical - Youtuber ảo đứng thứ nhì về lượng subcribe sau Kizuna AI. Tên cô nghĩa là Đêm Trăng Sáng. Luna là người năng động, có tinh thần tự do. Điểm đặc biệt là cô trái ngược hoàn toàn với nhiều nữ VTubers nổi tiếng, khá thô tục và có thể xúc phạm người xem (mặc dù thực chất cô vẫn tốt bụng).",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCCebk1_w5oiMUTRxdNJq0sA',
            'name_channel'      => 'ここあMusic',
            'url_channel'       => 'https://www.youtube.com/channel/UCCebk1_w5oiMUTRxdNJq0sA',
            'url_video'         => 'https://www.youtube.com/watch?v=Ug1mTGc2Jqs',
            'thumbnail_channel' => 'kokoamusic-channel-thumbnail.jpg',
            'description'       => "Koko a Music là cô gái VTuber chủ yếu theo lĩnh vực âm nhạc, chỉ đăng video chơi nhạc dài từ 3-5 phút nhưng số subcribe rất khủng. Cô cover những bài hát như God knows, No pain, No game...",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCwRKt_raV3N5KZgxcFyC1vw',
            'name_channel'      => '鳥ノム - SUNTORY NOMU -',
            'url_channel'       => 'https://www.youtube.com/channel/UCwRKt_raV3N5KZgxcFyC1vw',
            'url_video'         => 'https://www.youtube.com/watch?v=35fKzdDH654',
            'thumbnail_channel' => 'suntory-nomu-channel-thumbnail.jpg',
            'description'       => 'Không muốn nằm ngoài cuộc chơi, hãng nước lọc Suntory cũng tung ra VTuber của mình là Suntory Nomu. KINGDOM NVHAI biết đến cô khi cô xuất hiện cùng Tokino Sora của Hololive. Trang chủ <a href="https://www.suntory.co.jp/enjoy/socialmedia/nomu/" target="_blank">Suntory Nomu</a>',
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
        ]);

        // ============== Hololive ==============

        youtuberank::create([
            'id_channel'        => 'UCJFZiqLMntJufDCHc6bQixg',
            'name_channel'      => 'hololive ホロライブ',
            'url_channel'       => 'https://www.youtube.com/channel/UCJFZiqLMntJufDCHc6bQixg',
            'url_video'         => 'https://youtu.be/RrsGNMMghKM',
            'thumbnail_channel' => 'hololive-channel-thumbnail.jpg',
            'description'       => "Hololive là công ty giải trí thành lập nên một nhóm gồm các Virtual Youtuber - gọi tắt là VTuber - nhằm cạnh tranh miếng bánh Virtual Youtuber đang nổi lên khắp Nhật Bản.",
            'enable'            => 1,
            'favorite'          => 1,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCp6993wxpyDPHUpavwDFqgg',
            'name_channel'      => 'Tokino Sora - SoraCh. ときのそらチャンネル',
            'url_channel'       => 'https://www.youtube.com/channel/UCp6993wxpyDPHUpavwDFqgg',
            'url_video'         => 'https://www.youtube.com/watch?v=G9SWOk2J6aw',
            'thumbnail_channel' => 'sora-channel-thumbnail.jpg',
            'description'       => "Tokino Sora - Vtuber đầu tiên của Hololive. Cô là senpai đời đầu của Hololive mà các đàn em phải ngưỡng mộ và học hỏi.
            Dù bây giờ cô nhường phần lớn thời lượng cho đàn em nhưng mỗi lần cô xuất hiện đều tạo dấu ấn như một boss cuối của Hololive.
            Cô không bao giờ giật mình khi bị dọa ma. Cô cũng đảm nhận nhiều chương trình Collab với các khách mời. Sora như một đại sứ của Hololive với rất nhiều MV Collab với các Virtual Youtuber khác.",
            'enable'            => 1,
            'favorite'          => 1,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCp-5t9SrOQwXMU7iIjQfARg',
            'name_channel'      => 'Ookami Mio - Mio Channel 大神ミオ',
            'url_channel'       => 'https://www.youtube.com/channel/UCp-5t9SrOQwXMU7iIjQfARg',
            'url_video'         => 'https://youtu.be/2l_6oIGTrbg',
            'thumbnail_channel' => 'mio-channel-thumbnail.jpg',
            'description'       => "Mio Channel là Virtual Youtuber chuyên chơi game là lập nhóm với các Virtual Youtuber khác. Cô là một nữ sói đen. KINGDOM NVHAI thích kênh này từ bài hát cover Sparkle với đồ họa 4K sắc nét. Cảnh Mio trong bầu trời xanh, chiều tà và đêm xuống với thiên thạch đang rơi xuống, nếu chỉnh trong độ phân giải 4K thì không thể chê vào đâu được.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UC1opHUrw8rvnsadT-iGp7Cg',
            'name_channel'      => 'Minato Aqua - Aqua Ch. 湊あくあ',
            'url_channel'       => 'https://www.youtube.com/channel/UC1opHUrw8rvnsadT-iGp7Cg',
            'url_video'         => 'https://www.youtube.com/watch?v=-aB6MQU8l1s',
            'thumbnail_channel' => 'aqua-channel-thumbnail.jpg',
            'description'       => "Lần đầu KINGDOM NVHAI biết đến kênh này là từ bài nhạc nghe khá dễ thương バレンタインに (tạm dịch là Đến Ngày Valentine). Aqua là VTuber của Hololive. Với tông màu xanh và biểu tượng mỏ neo, cô luôn được fan tặng icon mỏ neo trên stream của mình. Nhưng ấn tượng nhất vẫn là tốc độ subcribe của cô vượt qua cả senpai Sora.",
            'enable'            => 1,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCdyqAaZDKHXg4Ahi7VENThQ',
            'name_channel'      => 'Shirogane Noel - Noel Ch. 白銀ノエル',
            'url_channel'       => 'https://www.youtube.com/channel/UCdyqAaZDKHXg4Ahi7VENThQ',
            'url_video'         => 'https://youtu.be/f3_sSbdloZU',
            'thumbnail_channel' => 'noel-channel-thumbnail.jpg',
            'description'       => "Noel là Vtuber của Hololive. Cô theo phong cách kỵ sĩ Châu Âu thời Thập Tự Chinh. Cô được miêu tả là một cô gái có sức khỏe phi thường.",
            'enable'            => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCCzUftO8KOVkV4wQG1vkUvg',
            'name_channel'      => 'Houshou Marine - Marine Ch. 宝鐘マリン',
            'url_channel'       => 'https://www.youtube.com/channel/UCCzUftO8KOVkV4wQG1vkUvg',
            'url_video'         => 'https://youtu.be/UD7zJWFQFbk',
            'thumbnail_channel' => 'marine-channel-thumbnail.jpg',
            'description'       => "Houshou Marine là VTuber của Hololive. Cô theo phong cách cướp biển. Và nhắc tới cướp biển, không thể không cover bài He's a pirate trong phim Pirates of Caribbean. Cô có khả năng vẽ rất tốt. Nhưng điểm nổi tiếng nhất của cô là tuổi tác. Video nhảy cùng Natsumi và vốn kiến thức về anime của cô khiến ai cũng đoán cô là thế hệ 9X đời đầu.",
            'enable'            => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCS9uQI-jC3DE0L4IpXyvr6w',
            'name_channel'      => 'Kiryu Coco - Coco Ch. 桐生ココ',
            'url_channel'       => 'https://www.youtube.com/channel/UCS9uQI-jC3DE0L4IpXyvr6w',
            'url_video'         => 'https://youtu.be/uD4_sAuzoCg',
            'thumbnail_channel' => 'coco-channel-thumbnail.jpg',
            'description'       => "Kiryu Coco là Vtuber của Hololive. Cô là cô gái rồng trong hình dạng con người. Chương trình nổi tiếng nhất của cô là AsaCoCo Live nhưng KINGDOM NVHAI lại thích cô với bài hát My Heart Will Go On trong stream. Cô là một trong các VTuber của Hololive nói tiếng Anh rất tốt, ngang với Haato.",
            'enable'            => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCQ0UDLQCjY0rmuxCDE38FGg',
            'name_channel'      => 'Natsurio Matsuri - Matsuri Channel 夏色まつり',
            'url_channel'       => 'https://www.youtube.com/channel/UCQ0UDLQCjY0rmuxCDE38FGg',
            'url_video'         => 'https://www.youtube.com/watch?v=DHMUymmD-eE',
            'thumbnail_channel' => 'matsuri-channel-thumbnail.jpg',
            'description'       => "Matsuri là Vtuber của Hololive. Cô nổi tiếng với những câu chuyện nhạy cảm, chửi bới nhưng rất hài hước.",
            'enable'            => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCvaTdHTWBGv3MKj3KVqJVCw',
            'name_channel'      => 'Okayu Ch. 猫又おかゆ',
            'url_channel'       => 'https://www.youtube.com/channel/UCvaTdHTWBGv3MKj3KVqJVCw',
            'url_video'         => 'https://www.youtube.com/watch?v=DKFJMhfKzto',
            'thumbnail_channel' => 'okayu-channel-thumbnail.jpg',
            'description'       => "Okayu là Vtuber của Hololive.",
            'enable'            => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UC1CfXB_kRs3C-zaeTG3oGyg',
            'name_channel'      => 'Akai Haato - Haato Channel 赤井はあと',
            'url_channel'       => 'https://www.youtube.com/channel/UC1CfXB_kRs3C-zaeTG3oGyg',
            'url_video'         => 'https://www.youtube.com/watch?v=zpjVX9v8e84',
            'thumbnail_channel' => 'haato-channel-thumbnail.jpg',
            'description'       => "Haato là Heart viết bằng Katakana. Akai Haato nghĩa là Trái Tim Màu Đỏ. KINGDOM NVHAI biết đến Haato qua buổi stream hát nhạc tiếng Anh như Let It Go, Call Me Maybe. Haato đóng vai một cô gái đến từ Australia, vậy nên buổi stream của cô dùng rất nhiều tiếng Anh. Cô có một drama mùa COVID: kẹt lại Australia, không thể về Nhật cho đến hết năm 2020 hay hết dịch. Sau đó cô đã đăng nhiều video và nhận những bình luận hài nói rằng cô càng ngày càng mất trí khi mắc kẹt tại Australia.",
            'enable'            => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UC-hM6YJuNYVAmUWxeIr9FeA',
            'name_channel'      => 'Sakura Miko - Miko Ch. さくらみこ',
            'url_channel'       => 'https://www.youtube.com/channel/UC-hM6YJuNYVAmUWxeIr9FeA',
            'url_video'         => 'https://www.youtube.com/watch?v=7lFqJSIbEqw',
            'thumbnail_channel' => 'miko-channel-thumbnail.jpg',
            'description'       => "Sakura Miko là Vtuber của Hololive. Cô nổi tiếng là một trong các VTuber bẩn bựa nhất của Hololive với câu hát 'We are We are F*ck You'.",
            'enable'            => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UC-hM6YJuNYVAmUWxeIr9FeA',
            'name_channel'      => 'Yuduki Choco - Choco Ch. 癒月ちょこ',
            'url_channel'       => 'https://www.youtube.com/channel/UC1suqwovbL1kzsoaZgFZLKg',
            'url_video'         => 'https://www.youtube.com/watch?v=Rvgfa37Nseg',
            'thumbnail_channel' => 'choco-channel-thumbnail.jpg',
            'description'       => "Yuduki Choco là Vtuber của Hololive. Cô được gọi là Choco-sensei với ngoại hình là Succubus ngực to đóng vai y tá trường học với loạt video ASRM đầy những âm thanh dâm dục. Hơi đáng tiếc là kênh của cô dù ra mắt từ lâu nhưng bị Youtube cảnh cáo các video ASRM của cô nên cô tăng sub chậm lại.",
            'enable'            => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UC1DCedRgGHBdm81E1llLhOQ',
            'name_channel'      => 'Usada Pekora - Pekora Ch. 兎田ぺこら',
            'url_channel'       => 'https://www.youtube.com/channel/UC1DCedRgGHBdm81E1llLhOQ',
            'url_video'         => 'https://www.youtube.com/watch?v=xlaOkbgQWck',
            'thumbnail_channel' => 'pekora-channel-thumbnail.jpg',
            'description'       => "Usada Pekora là Vtuber của Hololive. Cô được gọi là con thỏ và rất nổi tiếng với điệu cười bẩn bựa HA! HA! HA! HA!. Hãy search Pekora Laugh để nghe tiếng cười có một không hai của cô.",
            'enable'            => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UC0TXe_LYZ4scaW2XMyi5_kw',
            'name_channel'      => 'AZKi Channel',
            'url_channel'       => 'https://www.youtube.com/channel/UC0TXe_LYZ4scaW2XMyi5_kw',
            'url_video'         => 'https://www.youtube.com/watch?v=MYgM7IZdeqI',
            'thumbnail_channel' => 'azki-channel-thumbnail.jpg',
            'description'       => "AZKi là VTuber của Hololive. Cô là VTuber chủ yếu theo lĩnh vực âm nhạc chứ không chơi game nên lượt subcribe của cô rất khiêm tốn. Bù lại cô được đầu tư cả nhân vật 3D. 2 bài hát cùng Tokino Sora nổi tiếng là Dango Daikazoku và Blessing You. Cô và Sora trở thành cặp đôi SorAz, bức tường cuối cùng để bảo vệ giấc mơ Idol Group của YAGOO, CEO Hololive. Cô cũng chơi một số game để thu hút thêm view, trong đó game Overcooked chơi cùng Sora là nổi tiếng nhất.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCa9Y57gfeY0Zro_noHRVrnw',
            'name_channel'      => 'Luna Ch. 姫森ルーナ',
            'url_channel'       => 'https://www.youtube.com/channel/UCa9Y57gfeY0Zro_noHRVrnw',
            'url_video'         => 'https://www.youtube.com/watch?v=0Ux7zSsgJKM',
            'thumbnail_channel' => 'luna-channel-thumbnail.jpg',
            'description'       => "Himemori Luna là VTuber của Hololive. Cô nổi tiếng với phần lớp học tiếng Anh ngắn trong chương trình Coco News. Những từ cô nói trong lớp tiếng Anh toàn những từ nói tục, không phù hợp với phong cách công chúa chút nào.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UC5CwaMl1eIgY8h02uZw7u8A',
            'name_channel'      => 'Suisei Channel',
            'url_channel'       => 'https://www.youtube.com/channel/UC5CwaMl1eIgY8h02uZw7u8A',
            'url_video'         => 'https://www.youtube.com/watch?v=medUm1AqRZ8',
            'thumbnail_channel' => 'suisei-channel-thumbnail.jpg',
            'description'       => "Hoshimachi Suisei là VTuber của Hololive. Cô mang hình ảnh của một thần tượng và có khả năng chơi Tetris rất giỏi.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCvInZx9h3jC2JzsIzoOebWg',
            'name_channel'      => 'Flare Ch. 不知火フレア',
            'url_channel'       => 'https://www.youtube.com/channel/UCvInZx9h3jC2JzsIzoOebWg',
            'url_video'         => 'https://www.youtube.com/watch?v=qMKET5fe-YE',
            'thumbnail_channel' => 'flare-channel-thumbnail.jpg',
            'description'       => "Shiranui Flare là VTuber của Hololive. ",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCdn5BQ06XqgXoAxIhbqw5Rg',
            'name_channel'      => 'フブキCh。白上フブキ',
            'url_channel'       => 'https://www.youtube.com/channel/UCdn5BQ06XqgXoAxIhbqw5Rg',
            'url_video'         => 'https://www.youtube.com/watch?v=UZnIHM2dQvA',
            'thumbnail_channel' => 'fubuki-channel-thumbnail.jpg',
            'description'       => "Fubuki là VTuber của Hololive. Cô là Virtual Youtuber thành công nhất của Hololive với lượng subcribe cao nhất. Trong hình dạng Shirigami, cô thường collab với các đàn em để kéo sub cho họ.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCDqI2jOz0weumE8s7paEk6g',
            'name_channel'      => 'Roboco Ch. - ロボ子 ',
            'url_channel'       => 'https://www.youtube.com/channel/UCDqI2jOz0weumE8s7paEk6g',
            'url_video'         => 'https://www.youtube.com/watch?v=ttpdreD_9Os',
            'thumbnail_channel' => 'roboco-channel-thumbnail.jpg',
            'description'       => "Roboco là VTuber của Hololive. Cô là một trong số các VTuber đầu tiên của Hololive. Tuy nhiên, tốc độ tăng sub của cô không tốt lắm.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCl_gCybOJRIgOXw6Qb4qJzQ',
            'name_channel'      => 'Rushia Ch. 潤羽るしあ',
            'url_channel'       => 'https://www.youtube.com/channel/UCl_gCybOJRIgOXw6Qb4qJzQ',
            'url_video'         => 'https://youtu.be/aBGaFFIP9bs',
            'thumbnail_channel' => 'rushia-channel-thumbnail.jpg',
            'description'       => "Uruha Rushia là VTuber của Hololive. Cô có hình dạng là một loli necromancer (triệu hồi sư) luôn miệng nói Rushia Boing Boing, mặc dù ngực cô là 1 trong 4 bức tường của Hololive (Wall of Hololive).",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCvzGlP9oQwU--Y0r9id_jnA',
            'name_channel'      => 'Subaru Ch. 大空スバル',
            'url_channel'       => 'https://www.youtube.com/channel/UCvzGlP9oQwU--Y0r9id_jnA',
            'url_video'         => 'https://www.youtube.com/watch?v=QjHlXKEF6A4',
            'thumbnail_channel' => 'subaru-channel-thumbnail.jpg',
            'description'       => "Subaru là VTuber của Hololive. Cô là một tomboy, kể mình đã vào Hololive sau khi nhà của cô bị cháy. Cô nổi tiếng từ video nói rằng sẽ làm một buổi stream ASMR (buổi stream âm thanh nói qua micro 2 tai). Kết quả là cô bị gán danh hiệu Donald Duck vì giọng tomboy vịt đực của mình.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UChAnqc_AY5_I3Px5dig3X1Q',
            'name_channel'      => 'Korone Ch. 戌神ころね',
            'url_channel'       => 'https://www.youtube.com/channel/UChAnqc_AY5_I3Px5dig3X1Q',
            'url_video'         => 'https://youtu.be/ZxAUxBkrozI',
            'thumbnail_channel' => 'korone-channel-thumbnail.jpg',
            'description'       => "Korone là VTuber của Hololive. Cô mang hình dạng một con sói, luôn luôn vui vẻ. Cô có một cái gối ôm hình ngón tay và đã từng chơi game HEAVY RAIN có cảnh chặt ngón tay. Từ đó, cô nổi tiếng là một kẻ chuyên sưu tầm ngón tay.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCXTpFs_3PqI41qX2d9tL2Rw',
            'name_channel'      => 'Shion Ch. 紫咲シオン',
            'url_channel'       => 'https://www.youtube.com/channel/UCXTpFs_3PqI41qX2d9tL2Rw',
            'url_video'         => 'https://www.youtube.com/watch?v=ISORcbhkfxM',
            'thumbnail_channel' => 'shion-channel-thumbnail.jpg',
            'description'       => "Shion là VTuber của Hololive. Cô là một phù thủy có lượng mana rất ít và phép thuật của cô luôn gây rắc rối. Cô thường xuyên xuất hiện trong các phim ngắn với phép thuật của mình. Cô cũng đóng vai làm vợ của Aqua và từng lén lút quan hệ với Okayu và nhiều người khác.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCD8HOxPs4Xvsm8H0ZxXGiBw',
            'name_channel'      => 'Mel Channel 夜空メルチャンネル',
            'url_channel'       => 'https://www.youtube.com/channel/UCD8HOxPs4Xvsm8H0ZxXGiBw',
            'url_video'         => 'https://www.youtube.com/watch?v=C0KQZUyfZ3Q',
            'thumbnail_channel' => 'mel-channel-thumbnail.jpg',
            'description'       => "Mel-chan tạo hình là một vampire, nhưng cô đã có tên mới là BANpire sau một loạt drama sóng gió. Một tên theo dõi cô đã gửi cô những thông tin đời tư cá nhân của cô. Cô hoảng sợ phải nhờ CEO Hololive là YAGOO can thiệp. Ông nhờ cả cảnh sát và luật sư. Vụ việc khiến cô không live stream 2 tháng, bỏ lỡ buổi debut 3D của mình. Trong buổi stream ra mắt mình trở lại, cô bị Youtube cắt sóng 2 lần vì bộ đồ mặc định hở ngực và có nhắc đến patsu. Đến lần thứ 3, buổi stream mới diễn ra suôn sẻ. Những buổi stream sau đó, cô để censor với dòng chữ: Youtube-kun daisuki.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCFTLzh12_nrtzqBPsTCqenA',
            'name_channel'      => 'アキロゼCh。Vtuber/ホロライブ所属',
            'url_channel'       => 'https://www.youtube.com/channel/UCFTLzh12_nrtzqBPsTCqenA',
            'url_video'         => 'https://www.youtube.com/watch?v=Ii7rtNaGlls',
            'thumbnail_channel' => 'aki-channel-thumbnail.jpg',
            'description'       => "Aki Rosenthal là VTuber của Hololive. Cô là một robot đến từ thế giới khác. Những buổi stream của cô không có gì đặc biệt nên dù làm VTuber đã lâu nhưng số subcribes khá ít. Cô được giúp đỡ bằng cách tham gia những phim ngắn 3D và làm vài thứ ecchi. Khi cô có bản 3D, cô đã biểu diễn bài múa rất đẹp của mình. Có lẽ cô chỉ phát huy khả năng của mình khi có bản 3D. Bài múa Sha-Le-Ys mang phong cách Elf/Fantasy say đắm lòng người là điểm sáng nhất của cô. Mọi người gọi cô là Goddess.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UC1uv2Oq6kNxgATlCiez59hw',
            'name_channel'      => 'Towa Ch. 常闇トワ',
            'url_channel'       => 'https://www.youtube.com/channel/UC1uv2Oq6kNxgATlCiez59hw',
            'url_video'         => 'https://www.youtube.com/watch?v=UlemRwXYWHg',
            'thumbnail_channel' => 'towa-channel-thumbnail.jpg',
            'description'       => "Tokoyami Towa là VTuber của Hololive. Cô là một con quỷ với cặp sừng và đuôi, nhưng cách nói chuyện của cô khiến mọi người lại gọi cô là thiên thần. Những buổi stream nổi bật của cô là những buổi tư vấn về cuộc sống.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCOyYb1c43VlX9rc_lT6NKQw',
            'name_channel'      => 'Ayunda Risu Ch. hololive-ID',
            'url_channel'       => 'https://www.youtube.com/channel/UCOyYb1c43VlX9rc_lT6NKQw',
            'url_video'         => 'https://youtu.be/ozANadM_Y8U',
            'thumbnail_channel' => 'risu-channel-thumbnail.jpg',
            'description'       => "Ayunda Risu là VTuber của Hololive. Cô là thế hệ đầu tiên của Hololive Indonesia. Cô tạo hình là một con sóc và rất thích xem stream của Korone senpai. Cô hiện là VTuber thành công nhất trong 3 VTuber đầu tiên của Hololive Indonesia, VTuber đầu tiên đạt 100.000 subcribe.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCP0BspO_AMEe3aQqqpo89Dg',
            'name_channel'      => 'Moona Hoshinova hololive-ID',
            'url_channel'       => 'https://www.youtube.com/channel/UCP0BspO_AMEe3aQqqpo89Dg',
            'url_video'         => 'https://www.youtube.com/watch?v=ATuX-x_u7ec',
            'thumbnail_channel' => 'moona-channel-thumbnail.jpg',
            'description'       => "Moona Hoshinova là VTuber của Hololive. Cô là thế hệ đầu tiên của Hololive Indonesia. Cô tạo hình là một nữ thần mặt trăng. Cô có 2 nhân cách là Moona vui vẻ và Hoshinova đồ sát thích dùng rìu (axe). Cô là VTuber KINGDOM NVHAI thích nhất trong các VTuber của Hololive Indonesia",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCAoy6rzhSf4ydcYjJw3WoVg',
            'name_channel'      => 'Airani Iofifteen Channel hololive-ID',
            'url_channel'       => 'https://www.youtube.com/channel/UCAoy6rzhSf4ydcYjJw3WoVg',
            'url_video'         => 'https://youtu.be/EM11RaN_Zn8',
            'thumbnail_channel' => 'iofi-channel-thumbnail.jpg',
            'description'       => "Airani Iofifteen là VTuber của Hololive. Cô là thế hệ đầu tiên của Hololive Indonesia. Cô có tạo hình là một họa sĩ. Cô có thể nói tiếng Indonesia, Nhật, Anh, Đức, Hàn và... tiếng người ngoài hành tinh (alienish). Nhiều người thắc mắc YAGOO làm sao có thể tìm được những cô gái đặc biệt này.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCK9V2B22uJYu3N7eR_BT9QA',
            'name_channel'      => 'Polka Ch. 尾丸ポルカ',
            'url_channel'       => 'https://www.youtube.com/channel/UCK9V2B22uJYu3N7eR_BT9QA',
            'url_video'         => 'https://youtu.be/erweyYJ4CGk',
            'thumbnail_channel' => 'polka-channel-thumbnail.jpg',
            'description'       => "Omaru Polka là VTuber của Hololive. Cô là thế hệ thứ 5 của Hololive. Cô có tạo hình là một chú hề. Cô có meme với game Among Us. Khi bị bắt quả tang. cô đã thanh minh với lý do: 'TÔI LÀ VTUBER 300K SUB!'. Hy vọng không phải vì câu nói này mà cô mãi mãi là một VTuber 300k sub như cô nói.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCUKD-uaobj9jiqB-VXt71mA',
            'name_channel'      => 'Botan Ch.獅白ぼたん',
            'url_channel'       => 'https://www.youtube.com/channel/UCUKD-uaobj9jiqB-VXt71mA',
            'url_video'         => 'https://www.youtube.com/watch?v=ypv58k8ux-Y',
            'thumbnail_channel' => 'botan-channel-thumbnail.jpg',
            'description'       => "Shishiro Botan là VTuber của Hololive. Cô là thế hệ thứ 5 của Hololive. Cô có tạo hình là một con sư tử trắng. Buổi stream hài hước là buổi chơi game Overcooked! 2 với Watame-senpai, một con cừu. Trong buổi stream, 2 cô luôn nói những câu ẩn ý như thể Botan sắp ăn thịt Watame.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCFKOVgVbGmX65RxO3EtH3iw',
            'name_channel'      => 'Lamy Ch. 雪花ラミィ',
            'url_channel'       => 'https://www.youtube.com/channel/UCFKOVgVbGmX65RxO3EtH3iw',
            'url_video'         => '',
            'thumbnail_channel' => 'lamy-channel-thumbnail.jpg',
            'description'       => "Yukihana Lamy là VTuber của Hololive. Cô là thế hệ thứ 5 của Hololive. Cô có tạo hình là một cô tiên nữ. Fan gọi cô là tiên nữ con nhà lành nhưng mê S&M. Cô đã 'ngoại tình' với Haato vì chân của Haato khá phê.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCAWSyEs_Io8MtpY3m-zqILA',
            'name_channel'      => 'Nene Ch.桃鈴ねね',
            'url_channel'       => 'https://www.youtube.com/channel/UCAWSyEs_Io8MtpY3m-zqILA',
            'url_video'         => 'https://www.youtube.com/watch?v=lS-s2s640Kc',
            'thumbnail_channel' => 'nene-channel-thumbnail.jpg',
            'description'       => "Momosuzu Nene là VTuber của Hololive. Cô là thế hệ thứ 5 của Hololive. Cô có tạo hình là một chú mèo với chuông rất to trên cổ. Fan gọi cô là Nenechi",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 1,
            'hololive'          => 1,
        ]);



        // ============== Translate ==============

        youtuberank::create([
            'id_channel'        => 'UC5FqvcatEZ2pjXvfhq4eMoQ',
            'name_channel'      => 'Rimia Kodachi',
            'url_channel'       => 'https://www.youtube.com/channel/UC5FqvcatEZ2pjXvfhq4eMoQ',
            'url_video'         => 'https://youtu.be/aF5S4LSFxeE',
            'thumbnail_channel' => 'rimia-kodachi-channel-thumbnail.jpg',
            'description'       => "Rimia Kodachi là trang vietsub rất nhiều video của các Virtual Youtuber như Kizuna AI, Mirai Akari... Một nguồn vietsub đáng để ủng hộ.",
            'enable'            => 1,
            'favorite'          => 0,
            'virtual_youtuber'  => 0,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCBS_hANfRVQal3OpQPMACcw',
            'name_channel'      => 'MAGES, The Wandering Mage',
            'url_channel'       => 'https://www.youtube.com/user/MegaTypeTLB',
            'url_video'         => 'https://youtu.be/I7ZSvVWdSXA',
            'thumbnail_channel' => 'MAGES-channel-thumbnail.jpg',
            'description'       => "Là kênh Youtube dịch anime. NVHAI biết đến kênh này nhờ bản dịch đầy đủ Date a live Twin Edition bằng tiếng Anh, giúp bản dịch của NVHAI nhanh chóng được hoàn thành. Tuy nhiên, có lẽ kênh đã không còn hoạt động.",
            'enable'            => 1,
            'favorite'          => 0,
            'visual_novel'      => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCU0Z5716wQX8IIZVna7G0zg',
            'name_channel'      => 'lyger VTuber translations',
            'url_channel'       => 'https://www.youtube.com/channel/UCU0Z5716wQX8IIZVna7G0zg',
            'url_video'         => 'https://www.youtube.com/watch?v=35ShbH__iBg',
            'thumbnail_channel' => 'lyger-VTuber-translations-channel-thumbnail.jpg',
            'description'       => "lyger VTuber translations là một kênh chuyên dịch các stream của Vtuber Hololive. VTuber kênh này thích nhất là Matsuri nên có rất nhiều video dành cho Vtuber này.",
            'enable'            => 1,
            'favorite'          => 0,
            'visual_novel'      => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCi3RiY2dus-oeBRvxRBNJgg',
            'name_channel'      => 'birdkun21',
            'url_channel'       => 'https://www.youtube.com/user/birdkun21',
            'url_video'         => 'https://www.youtube.com/watch?v=ZPSWGQDemCE',
            'thumbnail_channel' => 'birdkun21-channel-thumbnail.jpg',
            'description'       => "Kênh này được tạo năm 2010, đã ngưng hoạt động một thời gian dài. Sau này hoạt động trở lại với việc dịch VTuber.",
            'enable'            => 1,
            'favorite'          => 0,
            'visual_novel'      => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCCZr6pq56yWtgBYihhy31-w',
            'name_channel'      => 'JudeKey',
            'url_channel'       => 'https://www.youtube.com/channel/UCCZr6pq56yWtgBYihhy31-w',
            'url_video'         => 'https://www.youtube.com/watch?v=aZMg7s4QKOg',
            'thumbnail_channel' => 'judekey-channel-thumbnail.jpg',
            'description'       => "Đây là một kênh đăng nhiều game visual novel, trong đó có Konosuba và Data a live.",
            'enable'            => 1,
            'favorite'          => 0,
            'visual_novel'      => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCrYpo1jB5xh6b_MgsZ4rqjQ',
            'name_channel'      => 'Drako Gaspar',
            'url_channel'       => 'https://www.youtube.com/channel/UCrYpo1jB5xh6b_MgsZ4rqjQ',
            'url_video'         => 'https://youtu.be/DJ6yCMrpnJc',
            'thumbnail_channel' => 'drako-gaspar-channel-thumbnail.jpg',
            'description'       => "Là kênh Youtube dịch anime qua tiếng Tây Ban Nha. Trong đây dịch từng đoạn sự kiện đặc biệt. NVHAI dịch Date a live bằng tiếng Tây Ban Nha để tốc độ gõ được nhanh chóng hơn.",
            'enable'            => 1,
            'favorite'          => 0,
            'visual_novel'      => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UC_6dbaltxheAEJiy9aZDRVw',
            'name_channel'      => 'Miru Shion',
            'url_channel'       => 'https://www.youtube.com/channel/UC_6dbaltxheAEJiy9aZDRVw',
            'url_video'         => 'https://www.youtube.com/watch?v=Yu8OFpHOy58',
            'thumbnail_channel' => 'miru-shion-channel-thumbnail.jpg',
            'description'       => "Là kênh Youtube dịch VTuber. KINGDOM NVHAI biết đến kênh này nhờ video về Tokino Sora.",
            'enable'            => 1,
            'favorite'          => 0,
            'visual_novel'      => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCfa4LOAJb8Yet6QIWOY0BUg',
            'name_channel'      => 'Kamome Subs',
            'url_channel'       => 'https://www.youtube.com/channel/UCfa4LOAJb8Yet6QIWOY0BUg',
            'url_video'         => 'https://www.youtube.com/watch?v=O_jC2i-KAVw',
            'thumbnail_channel' => 'kamome-subs-channel-thumbnail.jpg',
            'description'       => "Là kênh Youtube dịch VTuber. Kênh này có vẻ rất thích Haato của Hololive",
            'enable'            => 1,
            'favorite'          => 0,
            'visual_novel'      => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCPZio2d377EtYOqzCIqpOsQ',
            'name_channel'      => 'Yumemi Translations',
            'url_channel'       => 'https://www.youtube.com/channel/UCPZio2d377EtYOqzCIqpOsQ',
            'url_video'         => 'https://www.youtube.com/watch?v=SeurpSjIIAg',
            'thumbnail_channel' => 'yumemi-translations-channel-thumbnail.jpg',
            'description'       => "Là kênh Youtube dịch VTuber của Hololive.",
            'enable'            => 1,
            'favorite'          => 0,
            'visual_novel'      => 1,
        ]);

        youtuberank::create([
            'id_channel'        => 'UCnTIjR2biTlYBNxn_H2jXfw',
            'name_channel'      => 'HoloLive etc Cuts',
            'url_channel'       => 'https://www.youtube.com/channel/UCnTIjR2biTlYBNxn_H2jXfw',
            'url_video'         => 'https://youtu.be/oa1ajMyoNJI',
            'thumbnail_channel' => 'holoLive-etc-cuts-channel-thumbnail.jpg',
            'description'       => "Là kênh chuyên dịch Hololive.",
            'enable'            => 1,
            'favorite'          => 0,
            'visual_novel'      => 1,
        ]);



        // Thêm các kênh sau
        // Ola Aphrodite
        // Trung Nguyen UCoCl0t_fdqYAznPy_ZyGFdw
        // Siro Channel UCLhUvJ_wO9hOvv_yYENu4fQ
        // 【世界初?!】男性バーチャルYouTuber ばあちゃる   UC6TyfKcsrPwBsBnx2QobVLQ
        // もこめめ*channel   UCz6Gi81kE6p5cdW1rT0ixqw
        // 猫乃木もち   UC02LBsjt_Ehe7k0CuiNC6RQ
        // 神楽すず   UCUZ5AlC3rTlM-rA2cj5RP6w
        // 天宮 こころ / Kokoro Amamiya 【にじさんじ所属】   UCkIimWZ9gBJRamKF0rmPU8w

        // Nekomiya Hinata
        // 초이 CHOY   UCIsggA5Bnrm7ZRiOjMNH_rQ
        // Suntory Nomu UCwRKt_raV3N5KZgxcFyC1vw
        // https://www.youtube.com/watch?v=VYDOAc7XoVM
        // https://www.youtube.com/channel/UC5ymnWcdNRbaGSu_D-MYraw
        // https://www.youtube.com/watch?v=VZ3Q1AOF6zk
        // Helio Translations https://www.youtube.com/user/ErHeLiO4
        // Aoi ch https://www.youtube.com/watch?v=5mDKXam4lNY
        // ばかなんす! 《 日南 - canan - 》 https://www.youtube.com/channel/UCX8fFzD1Kdi8uCSmbOce08w
        // Nakedbakers TV https://www.youtube.com/channel/UCSmIILKUIOgHKl2cIz_9UOQ

        // Web kiểm tra https://commentpicker.com/youtube-channel-id.php
    }
}
