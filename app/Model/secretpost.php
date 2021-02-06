<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class secretvideo extends Model
{
    //Khai báo tên table
    protected $table = 'secretvideo';

    // Khai báo primary key
    // Trong Laravel có secretvideo::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_secretvideo';

    // Bỏ updated_at
    public $timestamps = true;

    protected $fillable = [
        'id_secretvideo',
        'name_vi_secretvideo', 'name_en_secretvideo', 'name_jp_secretvideo',
        'url_secretvideo',
        'present_vi_secretvideo', 'present_en_secretvideo', 'present_jp_secretvideo',
        'content_vi_secretvideo', 'content_en_secretvideo', 'content_jp_secretvideo',
        'date_secretvideo', 'thumbnail_secretvideo',
        'youtubechannel',
    ];
}
