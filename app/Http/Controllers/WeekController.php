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
    public function index(WeekQueryBuilder $builder, RecipesQueryBuilder $builder_recipes, $week)
    {
        try {
            $recipes_id = $builder->getRecipesByWeek($week);

            return view('catalog')->with('recipes', $builder_recipes->getRecipesById($recipes_id))
                ->with('activeWeeks', $builder->getActiveWeeks()->toJson());
        } catch (ModelNotFoundException $e) {
            return back()->withError('error', $e->getMessage());
        }
    }
}
