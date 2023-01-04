<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Recipe;

final class RecipesQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = Recipe::query();
    }

    public function getRecipesById($recipes_id)
    {
        $data = $this->model
            ->whereIn('id', $recipes_id)
            ->with('preferences')
            ->with('ingredients')
            ->with('photo')
            ->get(['id', 'name', 'cook_time']);

        $dataResponse = [];
        foreach ($data as $value) {
            $preferences = $value->preferences()->get(['preferences.id', 'preferences.name', 'preferences.color_text', 'preferences.color_background'])->slice(0, 3);
            $ingredients = $value->ingredientsForRecipe($value->id)->get();
            $photo = $value->photo()->get(['id', 'name', 'path']);

            $dataResponse[] = [
                'id' => $value->id,
                'name' => $value->name,
                'cook_time' => $value->cook_time,
                'photo' => json_encode($photo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
                'preferences' => json_encode($preferences, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
                'ingredients' => json_encode($ingredients, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
            ];
        }

        return $dataResponse;
    }

    public function getOneRecipe($id)
    {
        $recipe = $this->model->find($id);
        $ingredients = $recipe->ingredientsForRecipe($id)->get();
        $nutritionValues = $recipe->nutritionValuesForRecipe($id)->get();
        $preferences = $recipe->preferences()->get(['preferences.id', 'preferences.name', 'preferences.color_text', 'preferences.color_background']);
        $allergens = $recipe->allergens()->get(['name']);
        $photo = $recipe->photo()->get(['id', 'name', 'path']);

        $calories = null;
        foreach ($nutritionValues as $nutritionValue) {
            if ($nutritionValue->nutrition_values === 'Calories') {
                $calories = $nutritionValue->count;
            }
        }

        $dataResponse = [
            'id' => $recipe->id,
            'name' => $recipe->name,
            'cook_time' => $recipe->cook_time,
            'description' => $recipe->description,
            'photo' => json_encode($photo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
            'calories' => $calories,
            'preferences' => json_encode($preferences, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
            'ingredients' => json_encode($ingredients, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
            'nutrition_values' => json_encode($nutritionValues, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
            'allergens' => json_encode($allergens, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ];

        return $dataResponse;
    }
}
