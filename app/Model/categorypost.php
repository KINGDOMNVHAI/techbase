<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class categorypost extends Model
{
    //Khai báo tên table
    protected $table = 'categorypost';

    // Khai báo primary key
    // Trong Laravel có categorypost::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_cat_post';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_cat_post', 'name_cat_post', 'url_cat_post', 'enable_cat_post'
    ];
}
