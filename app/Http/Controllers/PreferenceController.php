<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queries\WeekQueryBuilder;
use App\Queries\PreferenceQueryBuilder;

class PreferenceController extends Controller
{
    public function __invoke(PreferenceQueryBuilder $builder_preference, WeekQueryBuilder $week_builder)
    {
        $dataResponse = [
            "preferences" => $builder_preference->getPreferencesForPlans(),
            "price_recipe" => $week_builder->getPriceRecipe()
        ];

        return view('plans')->with('data', json_encode($dataResponse, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }
}
