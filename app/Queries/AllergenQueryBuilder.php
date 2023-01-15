<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Allergen;

final class AllergenQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = Allergen::query();
    }

    public function getListAllergens()
    {
        return $this->model
            ->get(['id', 'name']);
    }
}
