<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $price_default = 200.00;
        $count = 200;

        for ($i = 1; $i <= $count; $i++) {
            $data[] = [
                "name" => fake()->sentence(rand(3, 10)),
                "cook_time" => fake()->time(),
                "description" => fake()->text(rand(700, 1700)),
                "recipe_text" => fake()->text(rand(2000, 10000)),
                "price" => $price_default,
            ];
        }

        return $data;
    }
}
