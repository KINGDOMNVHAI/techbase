<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class youtuberank extends Model
{
    //Khai báo tên table
    protected $table = 'youtuberank';

    // Khai báo primary key
    // Trong Laravel có video::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_channel';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_channel','name_channel', 'url_channel', 'url_video', 'thumbnail_channel', 'description', 'fan_count', 'enable',
        'favorite', 'virtual_youtuber', 'visual_novel', 'hololive'
    ];

}
