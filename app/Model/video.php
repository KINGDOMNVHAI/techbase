<?php

namespace App\Model;

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
        'description_vi_video', 'description_en_video', 'description_jp_video',
        'youtube_channel',
        'id_cat_video',
    ];
}
