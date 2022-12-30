<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $count = 200;

        for ($i = 1; $i <= $count; $i++) {
            $data[] = [
                "user_id" => rand(1, 200),
                "num_people" => rand(1, 6),
                "meals_week" => rand(3, 4),
                "weekly_menu_id" => rand(1, 10),
                "sum" => 200.00,
                "order_status_id" => rand(1, 4),
            ];
        }

        return $data;
    }
}
