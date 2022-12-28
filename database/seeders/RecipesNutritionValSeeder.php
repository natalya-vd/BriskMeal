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
        $count_nutrition_values = 20;

        for ($i = 1; $i <= $count_recipe; $i++) {
            $data[] = [
                "recipe_id" => rand(1, $count_recipe),
                "nutrition_val_id" => rand(1, $count_nutrition_values),
            ];
        }

        return $data;
    }
}
