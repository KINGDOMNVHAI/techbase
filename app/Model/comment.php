<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //Khai báo tên table
    protected $table = 'comment';

    // Khai báo primary key
    // Trong Laravel có detailpost::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_comment';

    // Bỏ updated_at
    public $timestamps = true;

    protected $fillable = [
        'name_comment', 'content_comment', 'img_comment',
        'id_user', 'id_detailpost_comment', 'enable',
    ];
}
