<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use App\Models\NutritionValues;
use App\Queries\NutritionValuesQueryBuilder;
use App\Queries\UnitQueryBuilder;
use App\Http\Requests\Admin\StoreNutritionValuesRequest;

class NutritionValuesController extends Controller
{
    /**
     * Рендеринг на сервере страницы nutrition value
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NutritionValuesQueryBuilder $builder)
    {
        $nutrition_values = $builder->getListNutritionValuesWithPagination()->toJson();

        return view('admin.pages.nutrition-values.index')->with('data', $nutrition_values);
    }

    /**
     * Рендеринг на сервере страницы создания nutrition value
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UnitQueryBuilder $unit_builder)
    {
        $data = $unit_builder->getListUnits();
        return view('admin.pages.nutrition-values.create')->with('data', json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    /**
     * Рендеринг на сервере страницы редактирования nutrition value
     *
     * @param  \App\Models\NutritionValues  $nutrition_value
     * @return \Illuminate\Http\Response
     */
    public function edit(
        NutritionValuesQueryBuilder $builder,
        UnitQueryBuilder $unit_builder,
        NutritionValues $nutrition_value
    ) {
        $nutrition_value_response = $builder->getOneNutritionValueAdmin($nutrition_value);

        $units = $unit_builder->getListUnits();

        $dataResponse = [
            'nutrition_value' => $nutrition_value_response,
            'units' => $units
        ];

        return view('admin.pages.nutrition-values.edit')->with('data', json_encode($dataResponse, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    /**
     * Получение списка nutrition values по Api.
     *
     * @param  NutritionValuesQueryBuilder $builder
     * @return \Illuminate\Http\Response
     */
    public function list(NutritionValuesQueryBuilder $builder): Response
    {
        return response($builder->getListNutritionValuesWithPagination()->toJson());
    }

    /**
     * Создание nutrition value по Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNutritionValuesRequest $request, NutritionValuesQueryBuilder $builder)
    {
        $nutrition_value = $request->validated();

        $nutrition_value_one = $builder->create($nutrition_value);

        if ($nutrition_value_one) {
            return response(__('messages.admin.nutrition_values.create.success'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NutritionValues  $nutrition_value
     * @return \Illuminate\Http\Response
     */
    public function show(NutritionValues $nutrition_value)
    {
        //
    }


    /**
     * Обновление nutrition value по Api.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NutritionValues  $nutrition_value
     * @return \Illuminate\Http\Response
     */
    public function update(
        StoreNutritionValuesRequest $request,
        NutritionValuesQueryBuilder $builder,
        NutritionValues $nutrition_value
    ) {
        $data = $request->validated();

        if ($builder->update($nutrition_value, $data)) {
            return response(__('messages.admin.nutrition_values.update.success'));
        }
    }

    /**
     * Удаление nutrition value по Api.
     *
     * @param  \App\Models\NutritionValues  $nutrition_value
     * @return \Illuminate\Http\Response
     */
    public function destroy(NutritionValuesQueryBuilder $builder, NutritionValues $nutrition_value)
    {
        if ($builder->delete($nutrition_value)) {
            return response(__('messages.admin.nutrition_values.delete.success'));
        }
    }
}
