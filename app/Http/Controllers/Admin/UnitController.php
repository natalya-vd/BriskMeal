<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use App\Models\Unit;
use App\Queries\UnitQueryBuilder;
use App\Http\Requests\Admin\StoreUnitRequest;

class UnitController extends Controller
{
    /**
     * Рендеринг на сервере страницы units
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UnitQueryBuilder $builder)
    {
        $units = $builder->getListUnitsWithPagination()->toJson();
        return view('admin.pages.units.index')->with('units', $units);
    }

    /**
     * Рендеринг на сервере страницы создания unit
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.units.create');
    }

    /**
     * Рендеринг на сервере страницы редактирования unit
     *
     * @param  \App\Models\Unit  $units
     * @return \Illuminate\Http\Response
     */
    public function edit(UnitQueryBuilder $builder, Unit $unit)
    {
        $data = $builder->getOneUnitAdmin($unit)->toJson();

        return view('admin.pages.units.edit')->with('data', $data);
    }

    /**
     * Получение списка units по Api.
     *
     * @param  RecipesQueryBuilder $builder
     * @return \Illuminate\Http\Response
     */
    public function list(UnitQueryBuilder $builder): Response
    {
        return response($builder->getListUnitsWithPagination()->toJson());
    }

    /**
     * Создание unit по Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUnitRequest $request, UnitQueryBuilder $builder)
    {
        $unit = $request->validated();

        $unitOne = $builder->create($unit);

        if ($unitOne) {
            return response(__('messages.admin.unit.create.success'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }


    /**
     * Обновление unit по Api.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(
        StoreUnitRequest $request,
        UnitQueryBuilder $builder,
        Unit $unit
    ) {
        $data = $request->validated();

        if ($builder->update($unit, $data)) {
            return response(__('messages.admin.unit.update.success'));
        }
    }

    /**
     * Удаление unit по Api.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnitQueryBuilder $builder, Unit $unit)
    {
        if ($builder->delete($unit)) {
            return response(__('messages.admin.unit.delete.success'));
        }
    }
}
