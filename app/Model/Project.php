<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //Khai báo tên table
    protected $table = 'project';

    // Khai báo primary key
    // Trong Laravel có Project::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_project';

    // Bỏ updated_at
    public $timestamps = true;

    protected $fillable = [
        'id_project', 'name_project',
    ];
}
