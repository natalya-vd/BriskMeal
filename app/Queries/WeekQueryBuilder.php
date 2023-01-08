<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Week;
use Illuminate\Database\Eloquent\ModelNotFoundException;

final class WeekQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = Week::query();
    }

    public function getRecipesByWeek($week)
    {
        $recipes = $this->model
            ->where('week_name', $week)
            ->firstOrFail()
            ->recipe();

        if (!$recipes) {
            throw new ModelNotFoundException('Неверно указана неделя');
        }

        $recipes_request = $recipes
            ->get(['recipe_id']);
        if ($recipes_request->isEmpty()) {
            throw new ModelNotFoundException('Меню не сформировано');
        }

        return $recipes_request;
    }

    public function getActiveWeeks()
    {
        return Week::where('active_week', true)
            ->get(['id', 'week_name', 'first_week_day', 'last_week_day']);
    }

    public function getPriceRecipe()
    {
        // Цена рецепта берется для первой активной недели. Считаем, что для всех активных недель цена рецепта будет одинаковой.
        $active_weeks = $this->getActiveWeeks();
        $first_active_week = $active_weeks->value('week_name');

        return $this->model->where('week_name', $first_active_week)->get(['price_recipe'])->value('price_recipe');
    }
}
