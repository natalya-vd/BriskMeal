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
        $data = [];
        $count = 20;

        for ($i = 1; $i <= $count; $i++) {
            $data[] = [
                "name" => fake()->sentence(rand(1, 2)),
            ];
        }

        return $data;
    }
}
