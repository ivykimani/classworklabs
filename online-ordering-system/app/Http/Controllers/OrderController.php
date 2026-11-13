<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();
        return view('orders', ['orders' => $orders]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20',
            'items' => 'required|array|min:1',
            'total_amount' => 'required|integer|min:1',
        ]);

        $order = Order::create([
            'customer_name' => $validated['customer_name'],
            'customer_phone' => $validated['customer_phone'],
            'items' => $validated['items'],
            'total_amount' => $validated['total_amount'],
            'status' => 'pending',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Order placed successfully! Order #' . $order->id,
        ]);
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,preparing,delivered,cancelled',
        ]);

        $order->update(['status' => $request->status]);

        return redirect('/admin/orders')->with('success', 'Order #' . $order->id . ' updated to ' . $request->status . '.');
    }
}
