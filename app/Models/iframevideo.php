<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class iframevideo extends Model
{
    //Khai báo tên table
    protected $table = 'iframevideo';

    // Khai báo primary key
    // Trong Laravel có iframevideo::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_iframe';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_iframe_video', 'id_video', 'id_iframe',
        'language', 'secret_video',
    ];
}
