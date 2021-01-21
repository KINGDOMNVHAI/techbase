<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TeamRoom extends Model
{
    //Khai báo tên table
    protected $table = 'team_room';

    // Khai báo primary key
    // Trong Laravel có Team::find() nghĩa là tìm theo primary key
    // protected $primaryKey = 'id_team';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_team', 'id_room', 'join_date', 'out_date', 'enable_team_room'
    ];
}
