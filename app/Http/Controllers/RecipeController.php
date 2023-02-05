<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Queries\RecipesQueryBuilder;
use App\Queries\WeekQueryBuilder;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    protected $active_weeks;
    protected $first_active_week;
    protected $recipes;

    public function __construct(WeekQueryBuilder $builder)
    {
        $this->active_weeks = $builder->getActiveWeeks();
        $this->first_active_week = $this->active_weeks->value('week_name');
        $this->recipes = $builder->getRecipesByWeek($this->first_active_week);
    }

    public function index(RecipesQueryBuilder $builder_recipes)
    {
        try {
            $recipesData = [
                'items' => $builder_recipes->getRecipesById($this->recipes['recipes_id']),
                'week_id' => $this->recipes['week_id']];

            return view('catalog')
                ->with('recipes', $recipesData)
                ->with('activeWeeks', $this->active_weeks->toJson())
                ->with('week', $this->first_active_week);
        } catch (ModelNotFoundException $e) {
            return back()->withError('error', $e->getMessage());
        }
    }

    public function welcome(RecipesQueryBuilder $builder_recipes)
    {
        try {
            return view('welcome')
                ->with('recipes', $builder_recipes->getRecipesById($this->recipes['recipes_id']))
                ->with('activeWeeks', $this->active_weeks->toJson())
                ->with('week', 0);
        } catch (ModelNotFoundException $e) {
            return back()->withError('error', $e->getMessage());
        }
    }

    public function show(RecipesQueryBuilder $recipesBuilder, $id)
    {
        try {
            $week_id = ['week_id' => $this->recipes['week_id']];

            return view('recipe')
                ->with('week_id', $week_id)
                ->with('recipe', $recipesBuilder->getOneRecipe($id));

        } catch (ModelNotFoundException $e) {
            return back()->withError('error', $e->getMessage());
        }
    }
}
