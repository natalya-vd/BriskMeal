<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Queries\RecipesQueryBuilder;
use App\Queries\WeekQueryBuilder;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(WeekQueryBuilder $builder, RecipesQueryBuilder $builder_recipes)
    {
        try {
            $active_weeks = $builder->getActiveWeeks();
            $first_active_week = $active_weeks->value('week_name');
            $recipes_id = $builder->getRecipesByWeek($first_active_week);

            return view('catalog')->with('recipes', $builder_recipes->getRecipesById($recipes_id))
                ->with('activeWeeks', $active_weeks->toJson())->with('week', 0);
        } catch (ModelNotFoundException $e) {
            return back()->withError('error', $e->getMessage());
        }
    }

    public function welcome(WeekQueryBuilder $builder, RecipesQueryBuilder $builder_recipes)
    {
        try {
            $active_weeks = $builder->getActiveWeeks();
            $first_active_week = $active_weeks->value('week_name');
            $recipes_id = $builder->getRecipesByWeek($first_active_week);

            return view('welcome')->with('recipes', $builder_recipes->getRecipesById($recipes_id))
                ->with('activeWeeks', $active_weeks->toJson())->with('week', 0);
        } catch (ModelNotFoundException $e) {
            return back()->withError('error', $e->getMessage());
        }
    }

    public function show(RecipesQueryBuilder $builder, $id)
    {
        return view('recipe')->with('recipe', $builder->getOneRecipe($id));
    }
}
