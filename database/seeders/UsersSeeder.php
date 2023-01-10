<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $count = 200;

        for ($i = 1; $i <= $count; $i++) {
            $data[] = [
                "name" => fake()->text(5),
                "email" => fake()->email(),
                "password" => fake()->password(),
                "remember_token" => fake()->windowsPlatformToken(),
            ];
        }

        return $data;
    }
}
