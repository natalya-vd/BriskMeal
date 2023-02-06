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
        $data = [
            [
                "recipe_id" => 1,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 1,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 1,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 2,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 2,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 2,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 3,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 3,
                "preference_id" => 6
            ],
            [
                "recipe_id" => 3,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 4,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 4,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 4,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 5,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 5,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 6,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 6,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 6,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 6,
                "preference_id" => 6
            ],
            [
                "recipe_id" => 7,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 7,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 8,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 9,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 9,
                "preference_id" => 6
            ],
            [
                "recipe_id" => 10,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 10,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 11,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 12,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 13,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 15,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 15,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 16,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 17,
                "preference_id" => 6
            ],
            [
                "recipe_id" => 17,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 18,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 19,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 19,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 20,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 21,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 22,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 23,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 23,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 23,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 24,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 24,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 25,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 25,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 26,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 26,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 26,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 27,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 27,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 28,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 28,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 29,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 29,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 29,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 30,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 30,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 31,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 31,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 32,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 32,
                "preference_id" => 6
            ],
            [
                "recipe_id" => 32,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 33,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 33,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 34,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 34,
                "preference_id" => 6
            ],
            [
                "recipe_id" => 34,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 35,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 35,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 36,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 36,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 37,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 37,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 39,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 39,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 39,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 41,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 41,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 42,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 42,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 43,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 44,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 45,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 45,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 46,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 46,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 46,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 47,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 48,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 49,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 49,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 50,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 51,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 51,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 52,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 52,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 53,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 53,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 54,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 55,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 55,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 55,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 59,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 60,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 61,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 62,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 63,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 63,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 64,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 65,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 65,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 66,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 66,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 67,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 67,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 68,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 69,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 69,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 69,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 70,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 70,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 71,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 72,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 72,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 72,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 73,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 73,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 73,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 74,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 74,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 74,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 75,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 75,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 75,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 76,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 76,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 77,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 78,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 79,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 79,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 82,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 82,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 83,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 84,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 85,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 86,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 87,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 87,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 88,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 88,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 90,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 90,
                "preference_id" => 7
            ]
        ];
        $count_recipe = 200;
        $count_preference = 7;

        for ($i = 91; $i <= $count_recipe; $i++) {
            $data[] = [
                "recipe_id" => rand(1, $count_recipe),
                "preference_id" => rand(1, $count_preference),
            ];
        }

        return $data;
    }
}
