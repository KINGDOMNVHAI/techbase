<?php

use App\Models\video;
use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        video::create([
            'name_vi_video' => 'Date A Live Rinne Utopia Vietsub Prologue Ngày 25/6 Cái chết của Shidou',
            'name_en_video' => 'Date A Live Rinne Utopia Vietsub Prologue',
            'name_jp_video' => 'Date A Live Rinne Utopia Vietsub Prologue',
            'url_video' => 'date-a-live-rinne-utopia-vietsub-prologue-25-6',

            'description_vi_video' => '<p>Date A Live Rinne Utopia Vietsub Bạn thuở nhỏ</p>
            <p>Sonogami Rinne, một người bạn rất thân thiết với gia đình Shidou. Tuy nhiên, dù có ký ức về Rinne, </p>',

            'description_en_video' => 'Team 1',

            'description_jp_video' => 'Team 1',

            'youtube_channel' => 1,
        ]);
    }
}
