<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class medal extends Model
{
    protected $table = 'medal';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_medal','name_en_medal','name_vi_medal',
        'content_en_medal', 'content_vi_medal',
        'img_medal','count_account_have_medal'
    ];

}
