<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert($this->getData());
    }

    private function getData()
    {
        return [
            [
                "name" => "Received",
            ],
            [
                "name" => "In processing",
            ],
            [
                "name" => "In delivery",
            ],
        ];
    }
}
