<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WeeksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weeks')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $year = '2023';
        $date = Carbon::now();
        $weeks_count = $date->isoWeeksInYear($year);
        $price_recipe = 2.49;

        for ($i = 1; $i <= $weeks_count; $i++) {
            $date->setISODate($year, $i);
            $data[] = [
                "year" => $year,
                "week" => $i,
                "week_name" => $year . '-W' . "$i",
                "first_week_day" => $date->startOfWeek()->format('Y-m-d'),
                "last_week_day" => $date->endOfWeek()->format('Y-m-d'),
                "active_week" => !!($i === 7 || $i === 8 || $i === 9),
                "price_recipe" => $price_recipe,
            ];
        }

        return $data;
    }
}
