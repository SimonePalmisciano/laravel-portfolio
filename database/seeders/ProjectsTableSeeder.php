<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $technologies = Technology::all();

        for($i = 0; $i < 10; $i++) {

            $project = new Project();

            $project->name = $faker->word();
            $project->client = $faker->name();
            $project->period = $faker->date();
            $project->summary = $faker->sentence(3);
            $project->type_id = rand(1,5);

            $project->save();

            $randomTechIds = $technologies->random(rand(1,3))->pluck('id');

            $project->technologies()->attach($randomTechIds);
        }
    }
}
