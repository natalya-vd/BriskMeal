<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesPreferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes_preferences')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $count_recipe = 200;
        $count_preference = 7;

        for ($i = 1; $i <= $count_recipe; $i++) {
            $data[] = [
                "recipe_id" => rand(1, $count_recipe),
                "preference_id" => rand(1, $count_preference),
            ];
        }

        return $data;
    }
}
