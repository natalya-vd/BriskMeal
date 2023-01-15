<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
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
}
