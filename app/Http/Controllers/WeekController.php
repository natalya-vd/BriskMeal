<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Queries\WeekQueryBuilder;
use App\Queries\RecipesQueryBuilder;


class WeekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(WeekQueryBuilder $builder, RecipesQueryBuilder $builder_recipes, $week, Request $request)
    {
        try {
            $recipes = $builder->getRecipesByWeek($week);
            $request->session()->put('week', $recipes['week_id']);
            $recipesData = ['items' => $builder_recipes->getRecipesById($recipes['recipes_id']), 'week_id' => $recipes['week_id']];
            return view('catalog')
                ->with('recipes', $recipesData)
                ->with('activeWeeks', $builder->getActiveWeeks()->toJson())
                ->with('week', $week);
        } catch (ModelNotFoundException $e) {
            return back()->withError('error', $e->getMessage());
        }
    }
}
