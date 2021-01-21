<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //Khai báo tên table
    protected $table = 'room';

    // Khai báo primary key
    // Trong Laravel có Room::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_room';

    // Bỏ updated_at
    public $timestamps = true;

    protected $fillable = [
        'id_room', 'name_room',
    ];
}
