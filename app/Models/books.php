<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    //Khai báo tên table
    protected $table = 'books';

    // Khai báo primary key
    // Trong Laravel có detailpost::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_book';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'name_book', 'url_book', 'thumbnail_book', 'enable_book',
    ];
}
