@extends('layouts.app')
@section('title', 'Order Placed - Fine Chakula Cafe')
@section('content')
<section class="section">
 <div class="container narrow">
 <div class="panel success-panel">
 <span class="success-mark">✓</span>
 <p class="eyebrow">Order Received</p>
 <h1>Thank you, {{ $user->name }}.</h1>
 <p>Your order has been saved successfully.</p>
 <div class="credential-box">
 <p><strong>Order Number:</strong> #{{ $order->id }}</p>
 <p><strong>Order Total:</strong> KSh {{ number_format($order->total_amount, 2) }}</p>
 <p><strong>Login Email:</strong> {{ $user->email }}</p>
 <p><strong>Temporary Password:</strong> {{ $plainPassword }}</p>
 </div>
 <p class="warning-text">
 Save these login details now. The temporary password is shown only on this page.
 </p>
 <a class="btn" href="{{ route('login') }}">Go to Login</a>
 </div>
 </div>
</section>
@endsection