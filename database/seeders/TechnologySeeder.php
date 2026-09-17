<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $techs = [
            'PHP',
            'JS',
            'HTML',
            'Python',
            'CSS',
            'Java'
        ];

        foreach($techs as $tech) {
            $newTechnology = new Technology();

            $newTechnology->name = $tech;
            $newTechnology->color = $faker->hexColor();

            $newTechnology->save();
        }
    }
}
