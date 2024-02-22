<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Type;
use App\Models\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = Type::all();

        // Crea e associa un progetto per ciascun tipo
        $types->each(function ($type) {
            $project = Project::factory()->make();
            $project->type()->associate($type);
            $project->save();
        });

    }
}
