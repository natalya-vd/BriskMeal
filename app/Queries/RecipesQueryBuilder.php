<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;

use App\Models\Recipe;

final class RecipesQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = Recipe::query();
    }

    public function getRecipesById($recipes_id, $week_id)
    {
        //dd($week_id);
        $data = $this->model
            ->whereIn('id', $recipes_id)
            ->with('preferences')
            ->with('ingredients')
            ->with('photo')
            ->get(['id', 'name', 'cook_time', 'recipe_text']);

        $dataResponse = [];
        foreach ($data as $value) {
            $preferences = $value->preferences()->get(['preferences.id', 'preferences.name', 'preferences.color_text', 'preferences.color_background'])->slice(0, 3);
            $ingredients = $value->ingredientsForRecipe($value->id)->get();
            $photo = $value->photo()->get(['id', 'name', 'path']);
            $currentUser = Auth::user();
            $quantity = 0;

            if ($currentUser) {
                $cart = $value->carts()
                    ->where('week_id', $week_id)
                    ->where('user_id', $currentUser->id)
                    ->get();
                //$cart = $value->carts()->where('user_id', $currentUser->id)->get();
                if ($cart->isNotEmpty()) {
                    $quantity = $cart[0]->pivot['quantity'];
                }
            }

            $dataResponse[] = [
                'id' => $value->id,
                'name' => $value->name,
                'text' => $value->recipe_text,
                'cook_time' => $value->cook_time,
                'photo' => json_encode($photo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
                'preferences' => json_encode($preferences, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
                'ingredients' => json_encode($ingredients, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
                'quantity' => $quantity,
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
        $currentUser = Auth::user();
        $quantity = 0;

        if ($currentUser) {
            $cart = $recipe->carts()->where('user_id', $currentUser->id)->get();
            if ($cart->isNotEmpty()) {
                $quantity = $cart[0]->pivot['quantity'];
            }
        }

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
            "path_pdf" => $recipe->path_pdf != null ? Storage::disk('public')->url($recipe->path_pdf) : '',
            'photo' => json_encode($photo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
            'calories' => $calories,
            'preferences' => json_encode($preferences, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
            'ingredients' => json_encode($ingredients, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
            'nutrition_values' => json_encode($nutritionValues, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
            'allergens' => json_encode($allergens, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
            'quantity' => $quantity,
        ];

        return $dataResponse;
    }

    public function getRecipesByIdAdmin($recipes_id)
    {
        $data = $this->model
            ->whereIn('id', $recipes_id)
            ->with('preferences')
            ->with('photo')
            ->get(['id', 'name']);
        return $data;
    }

    public function getOneRecipeAdmin($id)
    {
        $recipe = $this->model
            ->with('preferences')
            ->with('ingredients')
            ->with('allergens')
            ->with('nutritionValues')
            ->with('week')
            ->with('photo')
            ->find($id);

        $ingredients_recipe = $recipe->ingredients()->with('ingredient')->get()->map(function ($item) {
            return [
                "item" => [
                    "id" => $item->ingredient->id,
                    "name" => $item->ingredient->name
                ],
                "count" => $item->count
            ];
        });
        $nutrition_val_recipe = $recipe->nutritionValues()->with('nutritionVal')->get()->map(function ($item) {
            return [
                "item" => [
                    "id" => $item->nutritionVal->id,
                    "name" => $item->nutritionVal->name
                ],
                "count" => $item->count
            ];
        });

        $recipeResponse = [
            "id" => $recipe->id,
            "name" => $recipe->name,
            "cook_time" => $recipe->cook_time,
            "description" => $recipe->description,
            "recipe_text" => $recipe->recipe_text,
            "path_pdf" => $recipe->path_pdf != null ? Storage::disk('public')->url($recipe->path_pdf) : null,
            "photo" => $recipe->photo,
            "preferences" => $recipe->preferences->map(function ($item) {
                return $item->only(['id', 'name']);
            })->all(),
            "allergens" => $recipe->allergens->map(function ($item) {
                return $item->only(['id', 'name']);
            })->all(),
            "ingredients" => $ingredients_recipe,
            "nutrition_values" => $nutrition_val_recipe,
            "weeks" => $recipe->week

        ];
        return $recipeResponse;
    }

    public function getListRecipesWithPagination(): LengthAwarePaginator
    {
        $recipes = $this->model
            ->with('preferences')
            ->with('ingredients.ingredient')
            ->with('photo')
            ->with(['week' => function ($query) {
                $query->where('active_week', true);
            }])
            ->paginate(config('pagination.admin.recipes'));

        return $recipes;
    }

    public function getRandRecipeId(int $limit)
    {
        return $this->model->inRandomOrder()->limit($limit)->get(['id']);
    }

    public function create(array $data): Recipe|bool
    {
        $allergens_id = collect($data['allergens'])->pluck('id')->all();
        $preferences_id = collect($data['preferences'])->pluck('id')->all();
        $ingredients = collect($data['ingredients'])->map(function ($ingredients) {
            return [
                'count' => $ingredients['count'],
                'ingredient_id' => $ingredients['item']['id']
            ];
        })->all();
        $nutrition_values = collect($data['nutrition_values'])->map(function ($nutrition_value) {
            return [
                'count' => $nutrition_value['count'],
                'nutrition_val_id' => $nutrition_value['item']['id']
            ];
        })->all();

        $recipe = false;
        DB::beginTransaction();
        $recipe = Recipe::create($data);

        if ($recipe) {
            $recipe->allergens()->attach($allergens_id);
            $recipe->preferences()->attach($preferences_id);
            $recipe->ingredients()->createMany($ingredients);
            $recipe->nutritionValues()->createMany($nutrition_values);
        }
        DB::commit();

        return $recipe;
    }

    public function update(Recipe $recipe, array $data): bool
    {
        $recipe_update = false;
        $recipeModel = $recipe->fill($data);

        $allergens_id = collect($data['allergens'])->pluck('id')->all();

        $preferences_id = collect($data['preferences'])->pluck('id')->all();

        $weeks_id = collect($data['weeks'])->pluck('id')->all();

        $ingredients_id_delete = $recipeModel->ingredients->isNotEmpty() ? $recipeModel->ingredients
            ->map(function ($item) {
                return $item->ingredient_id;
            })
            ->diff(
                collect($data['ingredients'])->pluck('item')
                    ->pluck('id')
            ) : collect([]);

        $nutrition_values_id_delete = $recipeModel->nutritionValues->isNotEmpty() ? $recipeModel->nutritionValues
            ->map(function ($item) {
                return $item->nutrition_val_id;
            })
            ->diff(
                collect($data['nutrition_values'])->pluck('item')
                    ->pluck('id')
            ) : collect([]);

        DB::beginTransaction();
        //Удаляем ingredients из БД
        if (!$ingredients_id_delete->isEmpty()) {
            foreach ($ingredients_id_delete->all() as $item) {
                $recipeModel->ingredients()->where('ingredient_id', $item)->first()->delete();
            }
        }
        // Обновляем или создаем ingredients в БД
        foreach ($data['ingredients'] as $item) {
            $recipeModel->ingredients()->updateOrCreate(
                ['ingredient_id' => $item['item']['id']],
                ['count' => $item['count']]
            );
        }

        // Удаляем Nutrition values из БД
        if (!$nutrition_values_id_delete->isEmpty()) {
            foreach ($nutrition_values_id_delete->all() as $item) {
                $recipeModel->nutritionValues()->where('nutrition_val_id', $item)->first()->delete();
            }
        }
        // Обновляем или создаем Nutrition values в БД
        foreach ($data['nutrition_values'] as $item) {
            $recipeModel->nutritionValues()->updateOrCreate(
                ['nutrition_val_id' => $item['item']['id']],
                ['count' => $item['count']]
            );
        }

        // Обновляем name photo в БД
        foreach ($data['photo'] as $item) {
            $recipeModel->photo()->updateOrCreate(
                ['id' => $item['id']],
                ['name' => $item['name']]
            );
        }

        // Обновляем/удаляем/создаем allergens в БД
        $recipeModel->allergens()->sync($allergens_id);

        // Обновляем/удаляем/создаем preferences в БД
        $recipeModel->preferences()->sync($preferences_id);

        // Обновляем/удаляем/создаем запись из таблицы с назначением рецепта на неделю recipes_weeks
        $recipeModel->week()->sync($weeks_id);

        // Обновляем данные в БД в таблице recipes
        $recipe_update = $recipeModel->save();
        DB::commit();

        return $recipe_update;
    }

    public function delete(Recipe $recipe)
    {
        return $recipe->delete();
    }
}
