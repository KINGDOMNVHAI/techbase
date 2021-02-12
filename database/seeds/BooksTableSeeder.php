<?php

use App\Models\books;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        books::create([
            'name_book'      => 'Encore 1',
            'url_book'       => 'encore-1',
            'thumbnail_book' => 'DAL-Encore-1-cov.jpg',
            'enable_book'    => ENABLE,
        ]);

        books::create([
            'name_book'      => 'Encore 2',
            'url_book'       => 'encore-2',
            'thumbnail_book' => 'DAL-Encore-2-cov.jpg',
            'enable_book'    => ENABLE,
        ]);

        books::create([
            'name_book'      => 'Encore 3',
            'url_book'       => 'encore-3',
            'thumbnail_book' => 'DAL-Encore-3-cov.jpg',
            'enable_book'    => ENABLE,
        ]);

        books::create([
            'name_book'      => 'Encore 4',
            'url_book'       => 'encore-4',
            'thumbnail_book' => 'DAL-Encore-4-cov.jpg',
            'enable_book'    => ENABLE,
        ]);

        books::create([
            'name_book'      => 'Encore 5',
            'url_book'       => 'encore-5',
            'thumbnail_book' => 'DAL-Encore-5-cov.jpg',
            'enable_book'    => ENABLE,
        ]);

        books::create([
            'name_book'      => 'Encore 6',
            'url_book'       => 'encore-6',
            'thumbnail_book' => 'DAL-Encore-6-cov.jpg',
            'enable_book'    => ENABLE,
        ]);

        books::create([
            'name_book'      => 'Encore 7',
            'url_book'       => 'encore-7',
            'thumbnail_book' => 'DAL-Encore-7-cov.jpg',
            'enable_book'    => ENABLE,
        ]);

        books::create([
            'name_book'      => 'Encore 8',
            'url_book'       => 'encore-8',
            'thumbnail_book' => 'DAL-Encore-8-cov.jpg',
            'enable_book'    => ENABLE,
        ]);

        books::create([
            'name_book'      => 'Encore 9',
            'url_book'       => 'encore-9',
            'thumbnail_book' => 'DAL-Encore-9-cov.jpg',
            'enable_book'    => ENABLE,
        ]);

        books::create([
            'name_book'      => 'Encore 10',
            'url_book'       => 'encore-10',
            'thumbnail_book' => 'DAL-Encore-10-cov.jpg',
            'enable_book'    => ENABLE,
        ]);
    }
}
