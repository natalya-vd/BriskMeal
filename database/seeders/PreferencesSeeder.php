<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preferences')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $count_photo = 200;
        $count = 20;

        for ($i = 1; $i <= $count; $i++) {
            $data[] = [
                "name" => fake()->sentence(rand(1, 3)),
                "photo_id" => rand(1, $count_photo),
            ];
        }

        return $data;
    }
}
