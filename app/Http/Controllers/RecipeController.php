<?php

namespace App\Http\Controllers;

use App\Queries\RecipesQueryBuilder;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RecipesQueryBuilder $builder)
    {
        return view('catalog')->with('recipes', $builder->getRecipes());
    }

    public function show(RecipesQueryBuilder $builder, $id)
    {
        return view('recipe')->with('recipe', $builder->getOneRecipe($id));
    }
}
