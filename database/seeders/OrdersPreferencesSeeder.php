<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersPreferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders_preferences')->insert($this->getData());

    }

    private function getData()
    {
        $data = [];
        $count_order = 200;
        $count_preference = 7;

        for ($i = 1; $i <= $count_order; $i++) {
            $data[] = [
                "order_id" => rand(1, $count_order),
                "preference_id" => rand(1, $count_preference),
            ];
        }

        return $data;
    }
}
