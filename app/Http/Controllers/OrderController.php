<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

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

        //test data
        $order = Order::create(['user_id' => $request->input('user_id') ,
         'total' => 25, 'item_count' => 2]);  
    	//$order = Order::create($request->all());

        $order = Order::latest()->first();
        $productIds = $request->input('products');
        $order->products()->sync($productIds);
        
        //$total = DB::table('products')->sum($productIds->price);
        //$order->update(['total' => $total]);

        /*$total = 0;
        foreach ($products as $product) {
        $total += $product->price * $product->pivot->quantity
        }*/

    	return response()->json($order, 201);
    }

    public function viewOrder()
    {
        $orders = Order::all();
    	return view('viewOrder', compact('orders'));
    }

    public function editOrder($id)
    {
        $products = Product::all();
        $order = Order::where('id', $id)->get();
        
    	return view('editOrder', compact('products', 'order'));
    }

    public function update(Request $request, Order $order)
    {
    	$order->update($request->all());
        $productIds = $request->input('products');
        $order->products()->sync($productIds);

    	return response()->json($order, 200);
    }

    public function delete($id)
    {
    	$order = Order::find($id)->delete();

    	return redirect('http://localhost:8000/api/order/view');
    }
}
