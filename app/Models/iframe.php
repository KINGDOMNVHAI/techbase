<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class iframe extends Model
{
    //Khai báo tên table
    protected $table = 'iframe';

    // Khai báo primary key
    // Trong Laravel có iframe::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_iframe_video';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_iframe', 'id_video', 'secret_video',
        'embed_link_1', 'embed_link_2', 'embed_link_3', 'embed_link_4',
        'source_link_1', 'source_link_2', 'source_link_3', 'source_link_4'
    ];
}
