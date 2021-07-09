<?php

use App\Models\commentvideo;
use Illuminate\Database\Seeder;

class CommentVideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Lấy các cmt trong đây làm demo
        // https://www.youtube.com/watch?v=g0tMoxlmk5Y
        commentvideo::create([
            'username_cmt' => 'Ragnarok Sans',
            'title_cmt' => '',
            'content_cmt' => 'I Wish Our Unforgetable Succubus can See this......',
            'id_video' => 1,
        ]);

        commentvideo::create([
            'username_cmt' => 'Shiro Fantasy',
            'title_cmt' => '',
            'content_cmt' => 'No Stop i just Recover from the Pain Yesterday! Why you have to open it again! 😭😭😭',
            'parent_cmt' => 1,
            'id_video' => 1,
        ]);

        commentvideo::create([
            'username_cmt' => 'Asa 004',
            'title_cmt' => '',
            'content_cmt' => "don't worry, she probably watch this",
            'parent_cmt' => 1,
            'id_video' => 1,
        ]);

        commentvideo::create([
            'username_cmt' => 'Oofie',
            'title_cmt' => '',
            'content_cmt' => 'Aloe, wherever you are, we will always remember you.',
            'parent_cmt' => 1,
            'id_video' => 1,
        ]);

        commentvideo::create([
            'username_cmt' => 'Ren Amaki',
            'title_cmt' => '',
            'content_cmt' => 'Please, never forget her',
            'parent_cmt' => 1,
            'id_video' => 1,
        ]);

        commentvideo::create([
            'username_cmt' => '都市伝説やりすぎた',
            'title_cmt' => '',
            'content_cmt' => 'ちょこ先は羽あるからわかるけど<br>
            1人だけ舞空術使ってるのほんと草',
            'id_video' => 1,
        ]);
    }
}
