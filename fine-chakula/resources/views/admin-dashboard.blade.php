@extends('layouts.app')
@section('title', 'Admin Orders - Fine Chakula Cafe')
@section('content')
<section class="page-header">
 <div class="container">
 <p class="eyebrow">Administrator</p>
 <h1>Customer Orders</h1>
 <p>Open an order to view full details and update its status.</p>
 </div>
</section>
<section class="section">
 <div class="container">
 <div class="table-wrap">
 <table class="data-table">
 <thead>
 <tr>
 <th>Order</th>
<th>Customer</th>
<th>Date</th>
<th>Type</th>
<th>Total</th>
<th>Status</th>
<th></th>
 </tr>
 </thead>
 <tbody>
 @forelse($orders as $order)
 <tr>
 <td>#{{ $order->id }}</td>
<td>{{ $order->user->name }}</td>
 <td>{{ $order->created_at->format('d M Y, H:i') }}</td>
 <td>{{ ucfirst($order->order_type) }}</td>
<td>KSh {{ number_format($order->total_amount, 2) }}</td>
<td>
 <span class="status status-{{ $order->status }}">
 {{ ucwords(str_replace('_', ' ', $order->status)) }}
 </span>
 </td>
<td>
 <a class="text-link" href="{{ route('admin.orders.show', $order) }}">
 View Details
 </a>
 </td>
 </tr>
 @empty
 <tr>
 <td colspan="7">No orders have been placed yet.</td>
 </tr>
 @endforelse
 </tbody>
 </table>
 </div>
 </div>
</section>
@endsection