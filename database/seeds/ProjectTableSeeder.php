<?php

use App\Models\Project;
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
            'name_project' => 'project 1',
        ]);

        Project::create([
            'name_project' => 'project 2',
        ]);
    }
}
