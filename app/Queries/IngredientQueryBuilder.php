<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

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

    public function getListIngredientsWithPagination(): LengthAwarePaginator
    {
        return $this->model
            ->with('unit')
            ->paginate(config('pagination.admin.ingredients'));
    }

    public function getOneIngredientAdmin(Ingredient $ingredient)
    {
        return $this->model
            ->with('unit')
            ->find($ingredient->id);
    }

    public function create(array $data): Ingredient|bool
    {
        $dataSave['name'] = $data['name'];
        $dataSave['unit_id'] = $data['unit']['id'];
        return Ingredient::create($dataSave);
    }

    public function update(Ingredient $ingredient, array $data): bool
    {
        $dataSave['name'] = $data['name'];
        $dataSave['unit_id'] = $data['unit']['id'];
        return $ingredient->fill($dataSave)->save();
    }

    public function delete(Ingredient $ingredient)
    {
        return $ingredient->delete();
    }
}
