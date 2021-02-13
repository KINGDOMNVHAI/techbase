<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class presentpost extends Model
{
    //Khai báo tên table
    protected $table = 'presentpost';

    // Khai báo primary key
    // Trong Laravel có presentpost::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_presentpost';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'title_presentpost', 'url_presentpost',
        'content_presentpost',
		'thumbnail_presentpost',
		'enable_presentpost',
    ];
}
