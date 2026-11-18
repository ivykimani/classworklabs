@extends('layouts.app')
@section('title', 'Menu - Fine Chakula Cafe')
@section('content')

<section class="page-header">
 <div class="container">
 <p class="eyebrow">Our Menu</p>
 <h1>Choose your meals</h1>
 <p>Enter a quantity greater than zero for every meal you want.</p>
 </div>
</section>
<section class="section">
 <div class="container">
 <form method="POST" action="{{ route('checkout') }}">
 @csrf
 <div class="menu-grid">
 @forelse($products as $product)
 <article class="menu-card">
 <div>
 <span class="badge">{{ $product->category }}</span>
<h2>{{ $product->name }}</h2>
<p>{{ $product->description }}</p>
 </div>
 <div class="menu-card-bottom">
 <strong>KSh {{ number_format($product->price, 2) }}</strong>
 <label>
 Quantity
<input
 type="number"
name="quantities[{{ $product->id }}]"
value="{{ old('quantities.'.$product->id, 0) }}"
min="0"
max="50"
 >
 </label>
 </div>
 </article>
 @empty
 <p>No meals are currently available.</p>
 @endforelse
 </div>
@if($products->isNotEmpty())
 <div class="form-actions">
 <button class="btn" type="submit">Continue to Checkout</button>
 </div>
 @endif
 </form>
 </div>
</section>
@endsection
