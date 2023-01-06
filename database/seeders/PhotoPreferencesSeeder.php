<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoPreferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photo_preferences')->insert($this->getData());
    }

    private function getData()
    {
        return [
            [
                "name" => "Keto",
                "path" => 'seed/preferences/keto.svg',
                "preference_id" => 1,
            ],
            [
                "name" => "Vegan",
                "path" => 'seed/preferences/vegan.svg',
                "preference_id" => 2,
            ],
            [
                "name" => "Veggie",
                "path" => 'seed/preferences/vegetarian.svg',
                "preference_id" => 3,
            ],
            [
                "name" => "Gluten-Free",
                "path" => 'seed/preferences/gluten-free.svg',
                "preference_id" => 4,
            ],
            [
                "name" => "Fast & Fit",
                "path" => 'seed/preferences/fast-fit.svg',
                "preference_id" => 5,
            ],
            [
                "name" => "Paleo",
                "path" => 'seed/preferences/keto.svg',
                "preference_id" => 6,
            ],
            [
                "name" => "Mediterranean",
                "path" => 'seed/preferences/mediterranean.svg',
                "preference_id" => 7,
            ],
        ];
    }
}
