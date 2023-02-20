<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\Week;

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

        $week_id = $this->model
            ->where('week_name', $week)
            ->firstOrFail()->id;

        if (!$recipes) {
            throw new ModelNotFoundException('Неверно указана неделя');
        }

        $recipes_request = $recipes
            ->get(['recipe_id']);
        if ($recipes_request->isEmpty()) {
            throw new ModelNotFoundException('Меню не сформировано');
        }

        return ['recipes_id' => $recipes_request, 'week_id' => $week_id];
    }

    public function getActiveWeeks()
    {
        return Week::where('active_week', true)
            ->get(['id', 'week_name', 'first_week_day', 'last_week_day']);
    }

    public function getListWeeks()
    {
        return Week::withCount('recipe')
            ->get();
    }

    public function getPriceRecipe()
    {
        // Цена рецепта берется для первой активной недели. Считаем, что для всех активных недель цена рецепта будет одинаковой.
        $active_weeks = $this->getActiveWeeks();
        $first_active_week = $active_weeks->value('week_name');

        return $this->model->where('week_name', $first_active_week)->get(['price_recipe'])->value('price_recipe');
    }

    public function getPriceRecipeByWeek(string $week_name)
    {
        return $this->model
            ->select('price_recipe')
            ->firstWhere('week_name', $week_name);
    }

    public function createWeeklyMenu(Collection $recipes_id, int $week_id,)
    {
        $rand_data = $recipes_id->map(function ($item) use ($week_id) {
            return [
                'recipe_id' => $item->id,
                'week_id' => $week_id
            ];
        })->all();

        $this->model->find($week_id)->recipe()->attach($rand_data);
    }

    public function update(array $data): bool
    {
        $weeks = false;
        DB::beginTransaction();
        foreach ($data as $item) {
            Week::where('id', $item['week_id'])->update([
                'active_week' => $item['active_week'],
                'price_recipe' => $item['price_recipe']
            ]);
        }
        $weeks = true;
        DB::commit();
        return $weeks;
    }
}
