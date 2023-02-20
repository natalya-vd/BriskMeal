<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Models\Unit;

final class UnitQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = Unit::query();
    }

    public function getListUnits()
    {
        return $this->model
            ->get(['id', 'name']);
    }

    public function getListUnitsWithPagination(): LengthAwarePaginator
    {
        return $this->model
            ->paginate(config('pagination.admin.units'));
    }

    public function getOneUnitAdmin(Unit $unit)
    {
        return $this->model->find($unit->id);
    }

    public function create(array $data): Unit|bool
    {
        return Unit::create($data);
    }

    public function update(Unit $unit, array $data): bool
    {
        return $unit->fill($data)->save();
    }

    public function delete(Unit $unit)
    {
        return $unit->delete();
    }
}
