<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserTeam extends Model
{
    //Khai báo tên table
    protected $table = 'user_team';

    // Khai báo primary key
    // Trong Laravel có Team::find() nghĩa là tìm theo primary key
    // protected $primaryKey = 'id_team';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_user', 'id_team', 'join_date', 'out_date', 'enable_user_team'
    ];
}
