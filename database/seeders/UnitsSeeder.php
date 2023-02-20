<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $units = ['kcal', 'g', 'mg', 'ounce', 'unit'];

        foreach ($units as $value) {
            $data[] = [
                "name" => $value,
            ];
        }

        return $data;
    }
}
