<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesWeeksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes_weeks')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $weeks_count = 10;
        $recipes_count = 200;
        $menu_count = 30;

        for ($i = 1; $i <= $weeks_count; $i++) {
            $recipes_id_array = range(1, $recipes_count);
            shuffle($recipes_id_array);
            $recipe_id_week = array_slice($recipes_id_array, 0, $menu_count);
            foreach ($recipe_id_week as $recipe_id) {
                $data[] = [
                    'recipe_id' => $recipe_id,
                    'week_id' => $i
                ];
            }
        }

        return $data;
    }
}
