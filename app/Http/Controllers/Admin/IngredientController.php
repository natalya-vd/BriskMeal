<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use App\Models\Ingredient;
use App\Queries\IngredientQueryBuilder;
use App\Queries\UnitQueryBuilder;
use App\Http\Requests\Admin\StoreIngredientRequest;

class IngredientController extends Controller
{
    /**
     * Рендеринг на сервере страницы ingredients
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IngredientQueryBuilder $builder)
    {
        $ingredients = $builder->getListIngredientsWithPagination()->toJson();

        return view('admin.pages.ingredients.index')->with('data', $ingredients);
    }

    /**
     * Рендеринг на сервере страницы создания ingredient
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UnitQueryBuilder $unit_builder)
    {
        $data = $unit_builder->getListUnits();
        return view('admin.pages.ingredients.create')->with('data', json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    /**
     * Рендеринг на сервере страницы редактирования ingredient
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(
        IngredientQueryBuilder $builder,
        UnitQueryBuilder $unit_builder,
        Ingredient $ingredient
    ) {
        $ingredient_response = $builder->getOneIngredientAdmin($ingredient);

        $units = $unit_builder->getListUnits();

        $dataResponse = [
            'ingredient' => $ingredient_response,
            'units' => $units
        ];

        return view('admin.pages.ingredients.edit')->with('data', json_encode($dataResponse, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    /**
     * Получение списка ingredients по Api.
     *
     * @param  IngredientQueryBuilder $builder
     * @return \Illuminate\Http\Response
     */
    public function list(IngredientQueryBuilder $builder): Response
    {
        return response($builder->getListIngredientsWithPagination()->toJson());
    }

    /**
     * Создание ingredient по Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIngredientRequest $request, IngredientQueryBuilder $builder)
    {
        $ingredient = $request->validated();

        $ingredientOne = $builder->create($ingredient);

        if ($ingredientOne) {
            return response(__('messages.admin.ingredient.create.success'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        //
    }


    /**
     * Обновление ingredient по Api.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(
        StoreIngredientRequest $request,
        IngredientQueryBuilder $builder,
        Ingredient $ingredient
    ) {
        $data = $request->validated();

        if ($builder->update($ingredient, $data)) {
            return response(__('messages.admin.ingredient.update.success'));
        }
    }

    /**
     * Удаление ingredient по Api.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(IngredientQueryBuilder $builder, Ingredient $ingredient)
    {
        if ($builder->delete($ingredient)) {
            return response(__('messages.admin.ingredient.delete.success'));
        }
    }
}
