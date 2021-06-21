<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class channels extends Model
{
    //Khai báo tên table
    protected $table = 'channels';

    // Khai báo primary key
    // Trong Laravel có channel::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_channel';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_channel','name_channel', 'url_channel', 'url_video_present',
        'description_channel', 'description_video_vi', 'description_video_en', 'description_video_jp',
        'subscribe', 'enable_channel', 'thumbnail_channel',
        'virtual_youtuber', 'visual_novel', 'hololive',
        'facebook_channel','twitter_channel','instagram_channel', 'patreon_channel'
    ];
}
