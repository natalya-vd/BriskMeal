<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PhotoRecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photo_recipes')->insert($this->getData());
    }

    private function getData()
    {
        $data = [
            [   "recipe_id" => 1,
                "name" => "Parmesan-Crusted Chicken",
                "path" => "seed/recipes/1.jpg"
            ]
        ];
        $count = 100;
        $photo = Storage::disk('public')->files('seed/recipes');

        for ($i = 2; $i <= $count; $i++) {
            $data[] = [
                "name" => fake()->sentence(rand(2, 5)),
                "path" => $photo[rand(0, array_key_last($photo))],
                "recipe_id" => $i,
            ];
        }

        return $data;
    }
}
