@extends('layouts.app')
@section('title', 'My Orders - Fine Chakula Cafe')
@section('content')
<section class="page-header">
 <div class="container">
 <p class="eyebrow">Customer Dashboard</p>
 <h1>Welcome, {{ auth()->user()->name }}</h1>
 <p>These are the orders linked to your account.</p>
 </div>
</section>
<section class="section">
 <div class="container">
 <div class="table-wrap">
 <table class="data-table">
    <thead>
 <tr>
 <th>Order</th>
<th>Date</th>
<th>Type</th>
<th>Total</th>
<th>Status</th>
 </tr>
 </thead>
 <tbody>
 @forelse($orders as $order)
 <tr>
 <td>#{{ $order->id }}</td>
<td>{{ $order->created_at->format('d M Y, H:i') }}</td>
 <td>{{ ucfirst($order->order_type) }}</td>
<td>KSh {{ number_format($order->total_amount, 2) }}</td>
<td>
 <span class="status status-{{ $order->status }}">
 {{ ucwords(str_replace('_', ' ', $order->status)) }}
 </span>
 </td>
 </tr>
 @empty
 <tr>
 <td colspan="5">No orders found for this account.</td>
 </tr>
 @endforelse
 </tbody>
 </table>
 </div>
 </div>
</section>
@endsection
