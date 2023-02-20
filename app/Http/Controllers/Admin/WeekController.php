<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Queries\RecipesQueryBuilder;
use App\Queries\WeekQueryBuilder;
use App\Models\Week;

class WeekController extends Controller
{
    /**
     * Рендеринг на сервере страницы с рецептами первой активной недели
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
        WeekQueryBuilder $builder,
        RecipesQueryBuilder $builder_recipes
    ) {
        try {
            $active_weeks = $builder->getActiveWeeks();
            $first_active_week = $active_weeks->value('week_name');
            $recipes = $builder->getRecipesByWeek($first_active_week);

            $data_response = [
                'recipes' => $builder_recipes->getRecipesByIdAdmin($recipes['recipes_id']),
                'currentWeek' => $active_weeks->first(),
                'recipePriceWeek' => $builder->getPriceRecipeByWeek($first_active_week)->price_recipe,
                'activeWeeks' => $active_weeks,
                'listWeeks' => $builder->getListWeeks()
            ];

            return view('admin.pages.weeks.index')->with('data', json_encode($data_response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        } catch (ModelNotFoundException $e) {
            return back()->withError('error', $e->getMessage());
        }
    }

    /**
     * Рендеринг на сервере страницы работы с неделями
     *
     * @return \Illuminate\Http\Response
     */
    public function create(WeekQueryBuilder $builder)
    {
        $active_weeks = $builder->getActiveWeeks();
        $list_weeks = $builder->getListWeeks();

        $data_response = [
            'activeWeeks' => $active_weeks,
            'listWeeks' => $list_weeks
        ];
        return view('admin.pages.weeks.create')->with('data', json_encode($data_response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    /**
     * Получение списка recipes для недели по Api.
     */
    public function list(
        WeekQueryBuilder $builder,
        RecipesQueryBuilder $builder_recipes,
        Week $week
    ) {
        try {
            $recipes = $builder->getRecipesByWeek($week->week_name);

            $data_response = [
                'recipes' => $builder_recipes->getRecipesByIdAdmin($recipes['recipes_id']),
                'recipePriceWeek' => $builder->getPriceRecipeByWeek($week->week_name)->price_recipe,
            ];

            return response(json_encode($data_response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        } catch (ModelNotFoundException $e) {
            $data_response = [
                'recipes' => [],
                'recipePriceWeek' => '',
            ];

            return response(json_encode($data_response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        }
    }

    /**
     * Генерация недельного меню из случайных рецептов по Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(
        Request $request,
        WeekQueryBuilder $builder,
        RecipesQueryBuilder $builder_recipes
    ) {
        $data = $request->validate([
            'week_id' => 'required|integer|exists:weeks,id',
            'count' => 'required|integer'
        ]);
        $recipes_id = $builder_recipes->getRandRecipeId($data['count']);

        $builder->createWeeklyMenu($recipes_id, $data['week_id']);

        return response(__('ok'));
    }

    /**
     * Обновление данных о неделях по Api.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(
        Request $request,
        WeekQueryBuilder $builder
    ) {
        $data = $request->validate([
            '*' => 'array:week_id,active_week,price_recipe',
            '*.week_id' => 'required|integer|exists:weeks,id',
            '*.active_week' => 'required|boolean',
            '*.price_recipe' => 'required|numeric|min:0|not_in:0',
        ]);

        if ($builder->update($data)) {
            return response(__('ok'));
        }
    }
}
