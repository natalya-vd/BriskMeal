<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use App\Models\Allergen;
use App\Queries\AllergenQueryBuilder;
use App\Http\Requests\Admin\StoreAllergenRequest;

class AllergenController extends Controller
{
    /**
     * Рендеринг на сервере страницы аллергенов
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AllergenQueryBuilder $builder)
    {
        $allergens = $builder->getListAllergensWithPagination()->toJson();
        return view('admin.pages.allergens.index')->with('allergens', $allergens);
    }

    /**
     * Рендеринг на сервере страницы создания аллергена
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.allergens.create');
    }

    /**
     * Рендеринг на сервере страницы редактирования аллергена
     *
     * @param  \App\Models\Allergen  $allergen
     * @return \Illuminate\Http\Response
     */
    public function edit(AllergenQueryBuilder $builder, Allergen $allergen)
    {
        $data = $builder->getOneAllergenAdmin($allergen)->toJson();

        return view('admin.pages.allergens.edit')->with('data', $data);
    }

    /**
     * Получение списка аллергенов по Api.
     *
     * @param  RecipesQueryBuilder $builder
     * @return \Illuminate\Http\Response
     */
    public function list(AllergenQueryBuilder $builder): Response
    {
        return response($builder->getListAllergensWithPagination()->toJson());
    }

    /**
     * Создание аллергена по Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAllergenRequest $request, AllergenQueryBuilder $builder)
    {
        $allergen = $request->validated();

        $allergenOne = $builder->create($allergen);

        if ($allergenOne) {
            return response(__('messages.admin.allergen.create.success'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Allergen  $allergen
     * @return \Illuminate\Http\Response
     */
    public function show(Allergen $allergen)
    {
        //
    }


    /**
     * Обновление аллергена по Api.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Allergen  $allergen
     * @return \Illuminate\Http\Response
     */
    public function update(
        StoreAllergenRequest $request,
        AllergenQueryBuilder $builder,
        Allergen $allergen
    ) {
        $data = $request->validated();

        if ($builder->update($allergen, $data)) {
            return response(__('messages.admin.allergen.update.success'));
        }
    }

    /**
     * Удаление аллергена по Api.
     *
     * @param  \App\Models\Allergen  $allergen
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllergenQueryBuilder $builder, Allergen $allergen)
    {
        if ($builder->delete($allergen)) {
            return response(__('messages.admin.allergen.delete.success'));
        }
    }
}
