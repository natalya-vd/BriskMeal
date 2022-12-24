<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitsIngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units_ingredients')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $total_records = 200;

        $count_unit = 5;
        $count_ingredient = 20;
        $count_count = 100;

        for ($i = 1; $i <= $total_records; $i++) {
            $data[] = [
                "unit_id" => rand(1, $count_unit),
                "ingredient_id" => rand(1, $count_ingredient),
                "count" => (mt_rand(10, $count_count) / 10),
            ];
        }

        return $data;
    }
}
