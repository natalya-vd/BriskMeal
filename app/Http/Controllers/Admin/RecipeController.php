<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Controller;
use App\Queries\RecipesQueryBuilder;
use App\Queries\PreferenceQueryBuilder;
use App\Queries\NutritionValuesQueryBuilder;
use App\Queries\IngredientQueryBuilder;
use App\Queries\AllergenQueryBuilder;
use App\Queries\WeekQueryBuilder;
use App\Models\Recipe;
use App\Http\Requests\Admin\StoreRecipeRequest;

class RecipeController extends Controller
{
    /**
     * Рендеринг на сервере страницы рецептов
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(RecipesQueryBuilder $builder)
    {
        $recipes = $builder->getListRecipesWithPagination()->toJson();
        return view('admin.pages.recipes.index')->with('recipes', $recipes);
    }

    /**
     * Рендеринг на сервере страницы создания рецепта
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(
        PreferenceQueryBuilder $preference_builder,
        NutritionValuesQueryBuilder $nutrition_val_builder,
        IngredientQueryBuilder $ingredient_builder,
        AllergenQueryBuilder $allergen_builder
    ) {
        $preferences = $preference_builder->getListPreferences();
        $nutrition_val = $nutrition_val_builder->getListNutritionValues();
        $ingredients = $ingredient_builder->getListIngredients();
        $allergens = $allergen_builder->getListAllergens();
        $dataResponse = [
            'preferences' => $preferences,
            'nutritionValues' => $nutrition_val,
            'ingredients' => $ingredients,
            'allergens' => $allergens
        ];

        return view('admin.pages.recipes.create')->with('data', json_encode($dataResponse, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    /**
     * Рендеринг на сервере страницы редактирования рецепта
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(
        RecipesQueryBuilder $builder,
        PreferenceQueryBuilder $preference_builder,
        NutritionValuesQueryBuilder $nutrition_val_builder,
        IngredientQueryBuilder $ingredient_builder,
        AllergenQueryBuilder $allergen_builder,
        WeekQueryBuilder $week_builder,
        $id
    ) {
        $recipe = $builder->getOneRecipeAdmin($id);
        $preferences = $preference_builder->getListPreferences();
        $nutrition_val = $nutrition_val_builder->getListNutritionValues();
        $ingredients = $ingredient_builder->getListIngredients();
        $allergens = $allergen_builder->getListAllergens();

        $dataResponse = [
            'recipe' => $recipe,
            'preferences' => $preferences,
            'nutritionValues' => $nutrition_val,
            'ingredients' => $ingredients,
            'allergens' => $allergens,
            'listWeeks' => $week_builder->getListWeeks()
        ];

        return view('admin.pages.recipes.edit')->with('data', json_encode($dataResponse, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    /**
     * Получение списка рецептов по Api.
     *
     * @param  RecipesQueryBuilder $builder
     * @return \Illuminate\Http\Response
     */
    public function list(RecipesQueryBuilder $builder): Response
    {
        return response($builder->getListRecipesWithPagination()->toJson());
    }

    /**
     * Создание рецепта по Api
     *
     * @param  StoreRecipeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecipeRequest $request, RecipesQueryBuilder $builder)
    {
        $recipe = $request->validated();

        $recipeOne = $builder->create($recipe);

        if ($recipeOne) {
            return response(__('messages.admin.recipe.create.success'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Обновление рецепта по Api.
     *
     * @param  StoreRecipeRequest  $request
     * @param  Recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(
        StoreRecipeRequest $request,
        RecipesQueryBuilder $builder,
        Recipe $recipe
    ) {
        $data = $request->validated();

        if ($builder->update($recipe, $data)) {
            return response(__('messages.admin.recipe.update.success'));
        }
    }

    /**
     * Удаление рецепта по Api.
     *
     * @param  Recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe, RecipesQueryBuilder $builder): Response
    {
        if ($builder->delete($recipe)) {
            return response(__('messages.admin.recipe.delete.success'));
        }
    }
}
