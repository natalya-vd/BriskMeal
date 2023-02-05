<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

use App\Models\Order;

final class OrderQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = Order::query();
    }

    public function create(array $data): Order|bool
    {
        $orderOne = false;
        DB::beginTransaction();
        $orderOne = Order::create($data);
        $orderOne->cart()->update(["is_ordered" => true]);
        DB::commit();
        return $orderOne;
    }
}
