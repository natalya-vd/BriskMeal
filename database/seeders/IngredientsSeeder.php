<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $count = 20;
        $count_unit = 5;

        for ($i = 1; $i <= $count; $i++) {
            $data[] = [
                "name" => fake()->sentence(rand(1, 3)),
                "unit_id" => rand(1, $count_unit),
            ];
        }

        return $data;
    }
}
