<?php

use App\Models\iframevideo;
use Illuminate\Database\Seeder;

class IframeVideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        iframevideo::create([
            'id_video'      => 1,
            'embed_link_1'  => 'Link 1',
            'source_link_1' => 'Source 1',
        ]);
        iframevideo::create([
            'id_video'      => 2,
            'embed_link_1'  => 'Link 2',
            'source_link_1' => 'Source 2',
        ]);
    }
}
