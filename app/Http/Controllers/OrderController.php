<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    public function menu()
    {
    	return Product::all();
    }

    public function order()
    {
        $items = Product::all();
        return view('orderForm', compact('items'));
    }

    public function create(Request $request)
    {
    	$order = Order::create($request->all());
        //$order->total = $request->get('')
    	return response()->json($order, 201);
    }

    public function viewOrder(Order $order)
    {
    	return view('viewOrder', compact('order'));
    }

    public function editOrder()
    {
        $items = Product::all();
        $order = Order::all();
        
    	return view('editOrder', compact('items', 'order'));
    }

    public function update(Request $request, Order $order)
    {
    	$order->update($request->all());

    	return response()->json($order, 200);
    }

    public function delete(Order $order)
    {
    	$order->delete();

    	return response()->json(null, 204);
    }
}
