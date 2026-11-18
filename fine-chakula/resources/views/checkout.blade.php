@extends('layouts.app')
@section('title', 'Checkout - Fine Chakula Cafe')
@section('content')
<section class="page-header">
 <div class="container">
    <p class="eyebrow">Checkout</p>
 <h1>Confirm your order</h1>
 <p>Check your selected meals, then enter your details.</p>
</div>
</section>
<section class="section">
 <div class="container checkout-grid">
 <div class="panel">
 <h2>Your Order</h2>
 @foreach($cart as $item)
 <div class="summary-row">
 <div>
 <strong>{{ $item['product']->name }}</strong>
<small>
 {{ $item['quantity'] }} x
KSh {{ number_format($item['product']->price, 2) }}
 </small>
 </div>
 <span>KSh {{ number_format($item['line_total'], 2) }}</span>
 </div>
 @endforeach
 <div class="summary-total">
 <span>Estimated Total</span>
 <strong>KSh {{ number_format($estimatedTotal, 2) }}</strong>
 </div>
 </div>
 <div class="panel">
 <h2>Customer Details</h2>
 <form method="POST" action="{{ route('orders.store') }}">
 @csrf
 @foreach($cart as $item)
 <input
 type="hidden"
name="quantities[{{ $item['product']->id }}]"
value="{{ $item['quantity'] }}"
 >
 @endforeach
 <div class="form-group">
 <label for="name">Full Name</label>
 <input id="name" type="text" name="name" value="{{ old('name') }}" required>
 </div>
 <div class="form-group">
 <label for="email">Email Address</label>
 <input id="email" type="email" name="email" value="{{ old('email') }}" required>
 <small>Use an email address that has not been used in this project before.</small>
 </div>
 <div class="form-group">
 <label for="phone">Phone Number</label>
 <input id="phone" type="text" name="phone" value="{{ old('phone') }}" required>
 </div>
 <div class="form-group">
 <label for="order_type">Order Type</label>
 <select id="order_type" name="order_type" required>
 <option value="pickup" @selected(old('order_type') === 'pickup')>Pickup</option>
 <option value="delivery" @selected(old('order_type') ===
'delivery')>Delivery</option>
 </select>
 </div>
 <div class="form-group">
 <label for="delivery_address">Delivery Address</label>
 <input
 id="delivery_address"
type="text"
name="delivery_address"
value="{{ old('delivery_address') }}"
placeholder="Required only for delivery"
 >
 </div>
 <div class="form-group">
 <label for="special_note">Special Instructions</label>
 <textarea
 id="special_note"
name="special_note"
rows="4"
placeholder="Optional"
 >{{ old('special_note') }}</textarea>
 </div>
 <button class="btn" type="submit">Place Order</button>
 </form>
 </div>
 </div>
</section>
@endsection