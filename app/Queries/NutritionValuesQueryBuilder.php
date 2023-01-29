<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Models\NutritionValues;

final class NutritionValuesQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = NutritionValues::query();
    }

    public function getListNutritionValues()
    {
        return $this->model
            ->get(['id', 'name']);
    }

    public function getListNutritionValuesWithPagination(): LengthAwarePaginator
    {
        return $this->model
            ->with('unit')
            ->paginate(config('pagination.admin.nutrition_values'));
    }

    public function getOneNutritionValueAdmin(NutritionValues $nutrition_value)
    {
        return $this->model
            ->with('unit')
            ->find($nutrition_value->id);
    }

    public function create(array $data): NutritionValues|bool
    {
        $dataSave['name'] = $data['name'];
        $dataSave['unit_id'] = $data['unit']['id'];
        return NutritionValues::create($dataSave);
    }

    public function update(NutritionValues $nutrition_value, array $data): bool
    {
        $dataSave['name'] = $data['name'];
        $dataSave['unit_id'] = $data['unit']['id'];
        return $nutrition_value->fill($dataSave)->save();
    }

    public function delete(NutritionValues $nutrition_value)
    {
        return $nutrition_value->delete();
    }
}
