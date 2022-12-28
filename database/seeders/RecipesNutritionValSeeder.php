<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesNutritionValSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes_nutrition_val')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $count_recipe = 200;
        $count_nutrition_values = 9;

        for ($i = 1; $i <= $count_recipe; $i++) {
            for ($j = 1; $j <= $count_nutrition_values; $j++) {
                $data[] = [
                    "recipe_id" => $i,
                    "nutrition_val_id" => $j,
                    "count" => fake()->randomFloat(2, 1, 2000),
                ];
            }
        }

        return $data;
    }
}
