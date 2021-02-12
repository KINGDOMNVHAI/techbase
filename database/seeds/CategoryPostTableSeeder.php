<?php

use App\Models\categorypost;
use Illuminate\Database\Seeder;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categorypost::create([
            'name_cat_post'     => 'No Category',
            'url_cat_post'      => 'no-category',
            'enable_cat_post'   => false,
        ]);

        categorypost::create([
            'name_cat_post'     => 'Website - Mạng xã hội',
            'url_cat_post'      => 'website-mang-xa-hoi',
            'enable_cat_post'   => true,
        ]);

        categorypost::create([
            'name_cat_post'     => 'Game',
            'url_cat_post'      => 'game',
            'enable_cat_post'   => true,
        ]);

        categorypost::create([
            'name_cat_post'     => 'Anime - Manga',
            'url_cat_post'      => 'anime-manga',
            'enable_cat_post'   => true,
        ]);

        categorypost::create([
            'name_cat_post'     => 'Thủ thuật IT',
            'url_cat_post'      => 'thu-thuat-it',
            'enable_cat_post'   => true,
        ]);

        categorypost::create([
            'name_cat_post'     => 'Đa vũ trụ',
            'url_cat_post'      => 'da-vu-tru',
            'enable_cat_post'   => true,
        ]);
    }
}
