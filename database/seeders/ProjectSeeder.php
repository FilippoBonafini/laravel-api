<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {

            $type = Type::inRandomOrder()->first(); //1 record della tabella categories -> 1 istanza


            $project = new Project();
            $project->title = $faker->sentence(3);
            $project->description = $faker->text(300);
            $project->link = $faker->url();
            $project->slug = Str::slug($project->title, '-');

            $project->type_id = $type->id;
            $project->save();
        };
    }
}
