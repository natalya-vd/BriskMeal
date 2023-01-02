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
            for ($j = 1; $j <= $menu_count; $j++) {
                $data[] = [
                    'recipe_id' => rand(1, $recipes_count),
                    'week_id' => $i
                ];
            }
        }

        return $data;
    }
}
