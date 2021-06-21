<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class secretvideos extends Model
{
    //Khai báo tên table
    protected $table = 'secretvideos';

    // Khai báo primary key
    // Trong Laravel có secretvideos::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_secretvideos';
    protected $keyType = 'string';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_secretvideo',
        'name_vi_secretvideo', 'name_en_secretvideo', //'name_jp_secretvideo',
        'url_secretvideo',
        'description_vi_secretvideo', 'description_en_secretvideo', //'description_jp_secretvideo',
        'date_secretvideo', 'thumbnail_secretvideo',
        'id_channel', 'enable_secretvideo',
    ];
}
