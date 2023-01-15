<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Ingredient;

final class IngredientQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = Ingredient::query();
    }

    public function getListIngredients()
    {
        return $this->model
            ->get(['id', 'name']);
    }
}
