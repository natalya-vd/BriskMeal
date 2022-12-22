<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $data = [];
        $count = 200;

        for ($i = 1; $i <= $count; $i++) {
            $data[] = [
                "name" => fake()->sentence(rand(3, 10)),
                "path" => '',
                "recipe_id" => rand(1, $count),
            ];
        }

        return $data;
    }
}
