<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Preference;
use App\Queries\PreferenceQueryBuilder;
use App\Http\Requests\Admin\StorePreferenceRequest;


class PreferenceController extends Controller
{
    /**
     * Рендеринг на сервере страницы preferences
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PreferenceQueryBuilder $builder)
    {
        $preferences = $builder->getListPreferencesWithPagination()->toJson();
        return view('admin.pages.preferences.index')->with('preferences', $preferences);
    }

    /**
     * Рендеринг на сервере страницы создания preference
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.preferences.create');
    }

    /**
     * Рендеринг на сервере страницы редактирования preference
     *
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function edit(PreferenceQueryBuilder $builder, Preference $preference)
    {
        $data = $builder->getOnePreferenceAdmin($preference)->toJson();

        return view('admin.pages.preferences.edit')->with('data', $data);
    }

    /**
     * Получение списка preference по Api.
     *
     * @param  RecipesQueryBuilder $builder
     * @return \Illuminate\Http\Response
     */
    public function list(PreferenceQueryBuilder $builder): Response
    {
        return response($builder->getListPreferencesWithPagination()->toJson());
    }

    /**
     * Создание preference по Api
     *
     * @param  \App\Http\Requests\Admin\StorePreferenceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePreferenceRequest $request, PreferenceQueryBuilder $builder): Response
    {
        $preference = $request->validated();

        $preferenceOne = $builder->create($preference);

        if ($preferenceOne) {
            return response(__('messages.admin.preference.create.success'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function show(Preference $preference)
    {
        //
    }

    /**
     * Обновление preference по Api.
     *
     * @param  \App\Http\Requests\Admin\StorePreferenceRequest  $request
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function update(
        StorePreferenceRequest $request,
        PreferenceQueryBuilder $builder,
        Preference $preference
    ): Response {
        $data = $request->validated();

        if ($builder->update($preference, $data)) {
            return response(__('messages.admin.preference.update.success'));
        }
    }

    /**
     * Удаление preference по Api.
     *
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function destroy(PreferenceQueryBuilder $builder, Preference $preference): Response
    {
        if ($builder->delete($preference)) {
            return response(__('messages.admin.preference.delete.success'));
        }
    }
}
