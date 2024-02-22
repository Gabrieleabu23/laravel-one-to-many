<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\Type;
class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = Project::inRandomOrder() -> first();

    
        $projects -> each(function($project) {

            $userDetail = Type :: factory() -> make();
            $userDetail->project_id = $project->id;

            $userDetail -> save();
        });

     
    }
}
