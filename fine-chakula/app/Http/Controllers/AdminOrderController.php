<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class AdminOrderController extends Controller
{
 public function index()
 {
 $orders = Order::with('user')
 ->latest()
 ->get();
 return view('admin-dashboard', compact('orders'));
 }
 public function show(Order $order)
 {
 $order->load('user', 'items.product');
 return view('order-details', compact('order'));
 }
 public function updateStatus(Request $request, Order $order)
 {
 $validated = $request->validate([
 'status' => [
 'required',
 Rule::in(['pending', 'packed', 'on_delivery', 'delivered']),
 ],
 ]);
 $order->update([
 'status' => $validated['status'],
 ]);
 return back()->with('success', 'Order status updated successfully.');
 }
}