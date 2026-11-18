@extends('layouts.app')
@section('title', 'Order #'.$order->id.' - Fine Chakula Cafe')
@section('content')
<section class="page-header">
 <div class="container">
 <p class="eyebrow">Administrator</p>
 <h1>Order #{{ $order->id }}</h1>
 <p>Review the customer, items and current order status.</p>
 </div>
</section>
<section class="section">
 <div class="container checkout-grid">
 <div class="panel">
 <h2>Customer Details</h2>
 <p><strong>Name:</strong> {{ $order->user->name }}</p>
 <p><strong>Email:</strong> {{ $order->user->email }}</p>
 <p><strong>Phone:</strong> {{ $order->user->phone }}</p>
 <p><strong>Order Type:</strong> {{ ucfirst($order->order_type) }}</p>
 <p>
 <strong>Delivery Address:</strong>
 {{ $order->delivery_address ?: 'Not applicable' }}
 </p>
 <p>
 <strong>Special Note:</strong>
 {{ $order->special_note ?: 'None' }}
 </p>
 </div>
 <div class="panel">
 <h2>Update Status</h2>
 <p>
 Current status:
 <span class="status status-{{ $order->status }}">
 {{ ucwords(str_replace('_', ' ', $order->status)) }}
 </span>
 </p>
 <form method="POST" action="{{ route('admin.orders.status', $order) }}">
 @csrf
 @method('PATCH')
 <div class="form-group">
 <label for="status">New Status</label>
 <select id="status" name="status" required>
 <option value="pending" @selected($order->status === 'pending')>Pending</option>
<option value="packed" @selected($order->status === 'packed')>Packed</option>
<option value="on_delivery" @selected($order->status === 'on_delivery')>On
Delivery</option>
 <option value="delivered" @selected($order->status ===
'delivered')>Delivered</option>
 </select>
 </div>
 <button class="btn" type="submit">Update Status</button>
 </form>
 </div>
 </div>
 <div class="container section-top-space">
 <div class="panel">
 <h2>Ordered Items</h2>
 <div class="table-wrap">
 <table class="data-table">
 <thead>
 <tr>
 <th>Meal</th>
<th>Quantity</th>
<th>Unit Price</th>
<th>Line Total</th>
 </tr>
 </thead>
 <tbody>
 @foreach($order->items as $item)
 <tr>
 <td>{{ $item->product->name }}</td>
 <td>{{ $item->quantity }}</td>
<td>KSh {{ number_format($item->unit_price, 2) }}</td>
<td>
 KSh {{ number_format($item->unit_price * $item->quantity, 2) }}
 </td>
 </tr>
 @endforeach
 </tbody>
 <tfoot>
 <tr>
    <th colspan="3">Order Total</th>
<th>KSh {{ number_format($order->total_amount, 2) }}</th>
 </tr>
 </tfoot>
 </table>
 </div>
 <p><a class="text-link" href="{{ route('admin.dashboard') }}">← Back to all orders</a></p>
 </div>
 </div>
</section>
@endsection
