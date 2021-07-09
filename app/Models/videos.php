<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    //Khai báo tên table
    protected $table = 'videos';

    // Khai báo primary key
    // Trong Laravel có videos::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_video';
    protected $keyType = 'string';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_video',
        'name_vi_video', 'name_en_video', //'name_jp_video',
        'url_video',
        'description_vi_video', 'description_en_video', //'description_jp_video',
        'date_video', 'thumbnail_video',
        'id_channel', 'enable_video',
        'enable_vi', 'enable_en', 'enable_jp'
    ];
}
