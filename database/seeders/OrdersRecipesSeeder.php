<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersRecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders_recipes')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $count_order = 200;
        $count_recipe = 200;

        for ($i = 1; $i <= $count_order; $i++) {
            $data[] = [
                "order_id" => rand(1, $count_order),
                "recipe_id" => rand(1, $count_recipe),
            ];
        }

        return $data;
    }
}
