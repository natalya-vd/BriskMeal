<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Preference;
use App\Models\Recipe;
use App\Queries\RecipesQueryBuilder;
use App\Queries\WeekQueryBuilder;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Ingredient;
use App\Models\NutritionValues;
use App\Models\Unit;

class TestController extends Controller
{
    /*public function __invoke()
    {
        echo 'Hello World!';
    }*/

    public function index(Recipe $recipe)
    {
        $recipes = $recipe->limit(10)->get();

        return view('catalog-test')->with('recipes', $recipes);
    }
}
