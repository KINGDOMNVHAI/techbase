<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detailpost extends Model
{
    //Khai báo tên table
    protected $table = 'detailpost';

    // Khai báo primary key
    // Trong Laravel có detailpost::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_detailpost';

    // Bỏ updated_at
    public $timestamps = true;

    protected $fillable = [
        'id_detailpost',
        'name_vi_detailpost', 'name_en_detailpost',
        'url_detailpost',
        'present_vi_detailpost', 'present_en_detailpost',
        'content_vi_detailpost', 'content_en_detailpost',
        'date_detailpost', 'thumbnail_detailpost', 'id_cat_detailpost',
        'signature', 'author', 'views', 'enable', 'popular', 'hot_trend', 'update',
    ];
}
