<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chapters extends Model
{
    //Khai báo tên table
    protected $table = 'chapters';

    // Khai báo primary key
    // Trong Laravel có chapters::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_chapter';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'title_chapter', 'url_chapter',
        'content_chapter',
		'thumbnail_chapter',
		'id_book_chapter',
		'enable_chapter',
    ];
}
