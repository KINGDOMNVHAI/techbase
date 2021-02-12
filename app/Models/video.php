<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    //Khai báo tên table
    protected $table = 'video';

    // Khai báo primary key
    // Trong Laravel có video::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_video';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_video',
        'name_vi_video', 'name_en_video', 'name_jp_video',
        'url_video',
        'present_vi_video', 'present_en_video', 'present_jp_video',
        'content_vi_video', 'content_en_video', 'content_jp_video',
        'date_video', 'thumbnail_video',
        'youtubechannel',
    ];
}
