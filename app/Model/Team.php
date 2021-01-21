<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //Khai báo tên table
    protected $table = 'team';

    // Khai báo primary key
    // Trong Laravel có Team::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_team';

    // Bỏ updated_at
    public $timestamps = true;

    protected $fillable = [
        'id_team', 'name_team',
    ];
}
