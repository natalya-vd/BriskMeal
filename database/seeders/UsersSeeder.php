<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        $data[] = [
            "name" => 'admin',
            "email" => 'admin@admin.ru',
            "password" => Hash::make('12345'),
            "remember_token" => fake()->windowsPlatformToken(),
            "is_admin" => true
        ];
        $data[] = [
            "name" => 'user',
            "email" => 'user@user.ru',
            "password" => Hash::make('12345'),
            "remember_token" => fake()->windowsPlatformToken(),
            "is_admin" => false
        ];

        for ($i = 1; $i <= $count; $i++) {
            $data[] = [
                "name" => fake()->text(5),
                "email" => fake()->email(),
                "password" => fake()->password(),
                "remember_token" => fake()->windowsPlatformToken(),
                "is_admin" => false
            ];
        }

        return $data;
    }
}
