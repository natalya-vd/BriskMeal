<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Queries\OrderQueryBuilder;

class OrderController extends Controller
{
    public function index(OrderQueryBuilder $builder)
    {
        $orders = $builder->getListOrdersWithPagination()->toJson();

        return view('admin.pages.orders.index')->with('orders', $orders);
    }

    public function order(OrderQueryBuilder $builder, $id)
    {
        $orderResponse = $builder->getOneOrder($id);
        return view('admin.pages.orders.order')->with('order', json_encode($orderResponse, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }
}
