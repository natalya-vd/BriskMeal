<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Recipe;
use App\Models\RecipeIngredient;

final class RecipesQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = Recipe::query();
    }

    public function getRecipes()
    {
        // dd(Recipe::find(1)->ingredients->name);
        $data = $this->model
            ->with('preferences')
            ->with('ingredients')
            ->limit(30)
            ->get(['id', 'name', 'cook_time']);
        // dd($data);
        $dataResponse = [];
        foreach ($data as $value) {
            // dd($value->ingredients->toJson());
            $preferences = [];
            $ingredients = [];
            foreach ($value->preferences as $preference) {
                $preferences[] = [
                    "id" => $preference->id,
                    "name" => $preference->name,
                    "color_text" => $preference->color_text,
                    "color_background" => $preference->color_background
                ];
                // $ingredients[] = $value->ingredients['name'];
            }
            // dd($value->ingredients);
            $dataResponse[] = [
                'id' => $value->id,
                'name' => $value->name,
                'cook_time' => $value->cook_time,
                'preferences' => json_encode($preferences, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
            ];
        }

        return $dataResponse;
    }

    public function getOneRecipe($id)
    {
        $recipe = $this->model->find($id);
        $ingredients = $recipe->ingredients($id)->get();
        $preferences = $recipe->preferences()->get(['preferences.id', 'preferences.name', 'preferences.color_text', 'preferences.color_background']);
        $allergens = $recipe->allergens()->get(['name']);

        // dd($recipe->allergens()->get(['name']));

        $dataResponse[] = [
            'id' => $recipe->id,
            'name' => $recipe->name,
            'cook_time' => $recipe->cook_time,
            'description' => $recipe->description,
            'preferences' => json_encode($preferences),
            'ingredients' => json_encode($ingredients),
            'allergens' => json_encode($allergens),
        ];
        dd($dataResponse);
    }
}
