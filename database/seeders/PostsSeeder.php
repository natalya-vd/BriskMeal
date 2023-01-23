<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $count = 5;

        for ($i = 1; $i <= $count; $i++) {
            $data[] = [
                "title" => fake()->sentence(3, true),
                "content" => fake()->realText(fake()->numberBetween(10, 100)),
            ];
        }

        return $data;
    }
}
