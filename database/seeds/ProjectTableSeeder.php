<?php

use App\Model\Project;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name_project'      => 'hai',
        ]);

        Project::create([
            'name_project'      => 'thu',
        ]);
    }
}
