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
        return [
            [
                "name" => "Keto",
                "color_text" => "#222222",
                "color_background" => "#e5a6b2"
            ],
            [
                "name" => "Vegan",
                "color_text" => "#ffffff",
                "color_background" => "#28dc96"
            ],
            [
                "name" => "Veggie",
                "color_text" => "#ffffff",
                "color_background" => "#a1c339"
            ],
            [
                "name" => "Gluten-Free",
                "color_text" => "#ffffff",
                "color_background" => "#3d454b"
            ],
            [
                "name" => "Fast & Fit",
                "color_text" => "#ffffff",
                "color_background" => "#3d454b"
            ],
            [
                "name" => "Paleo",
                "color_text" => "#ffffff",
                "color_background" => "#3d454b"
            ],
            [
                "name" => "Mediterranean",
                "color_text" => "#ffffff",
                "color_background" => "#3d454b"
            ],
        ];
    }
}
