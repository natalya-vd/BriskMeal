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
        $data = [
            [
                "name" => 'admin',
                "email" => 'admin@admin.ru',
                "password" => Hash::make('12345'),
                "is_admin" => true
            ],
            [
                "name" => 'user',
                "email" => 'user@user.ru',
                "password" => Hash::make('12345'),
                "is_admin" => false
            ],
            [
                "name" => 'boss',
                "email" => 'boss@boss.ru',
                "password" => Hash::make('12345'),
                "is_admin" => false
            ]
        ];

        return $data;
    }
}
