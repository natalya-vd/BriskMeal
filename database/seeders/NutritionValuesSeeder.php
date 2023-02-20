<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NutritionValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nutrition_values')->insert($this->getData());
    }

    private function getData()
    {
        return [
            [
                "name" => "Calories",
                "unit_id" => 1,
            ],
            [
                "name" => "Fat",
                "unit_id" => 2,
            ],
            [
                "name" => "Saturated Fat",
                "unit_id" => 2,
            ],
            [
                "name" => "Carbohydrate",
                "unit_id" => 2,
            ],
            [
                "name" => "Sugar",
                "unit_id" => 2,
            ],
            [
                "name" => "Dietary Fiber",
                "unit_id" => 2,
            ],
            [
                "name" => "Protein",
                "unit_id" => 2,
            ],
            [
                "name" => "Cholesterol",
                "unit_id" => 3,
            ],
            [
                "name" => "Sodium",
                "unit_id" => 3,
            ],
        ];
    }
}
