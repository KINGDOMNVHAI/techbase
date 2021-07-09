<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class commentvideo extends Model
{
    //Khai báo tên table
    protected $table = 'commentvideo';

    // Khai báo primary key
    // Trong Laravel có detailpost::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_cmt';

    // Bỏ updated_at
    public $timestamps = true;

    protected $fillable = [
        'id_cmt', 'title_cmt', 'content_cmt', 'username_cmt', 'parent_cmt',
        'enable_cmt', 'id_video', 'id_secretvideo'
    ];
}
