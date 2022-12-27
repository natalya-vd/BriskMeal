<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesIngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes_ingredients')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $count_recipe = 200;
        $count_ingredient = 20;

        for ($i = 1; $i <= $count_recipe; $i++) {
            $data[] = [
                "recipe_id" => rand(1, $count_recipe),
                "ingredient_id" => rand(1, $count_ingredient),
                "count" => fake()->randomFloat(2, 1, 2000),
            ];
        }

        return $data;
    }
}
