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

    public function getListOrdersWithPagination(): LengthAwarePaginator
    {
        return $this->model
            ->with('orderStatuses')
            ->paginate(config('pagination.admin.orders'));
    }

    public function getOneOrder(int $id)
    {
        $order = $this->model
            ->with('orderStatuses')
            ->with('cart')
            ->find($id);

        $response = $order->getAttributes();

        $recipes = $order->cart->recipes;
        $response['recipes'] = $recipes->map(function ($item) {
            $recipe = $item->getAttributes();
            $recipe['quantity'] = $item->pivot->quantity;
            return $recipe;
        });
        $response['status'] = $order->orderStatuses;

        return $response;
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
