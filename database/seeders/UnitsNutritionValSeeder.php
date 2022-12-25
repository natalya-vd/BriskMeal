<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitsNutritionValSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units_nutrition_val')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $total_records = 200;

        $count_unit = 5;
        $count_nut_val = 20;
        $count_count = 2000;

        for ($i = 1; $i <= $total_records; $i++) {
            $data[] = [
                "unit_id" => rand(1, $count_unit),
                "nutrition_val_id" => rand(1, $count_nut_val),
                "count" => rand(5, $count_count),
            ];
        }

        return $data;
    }
}
