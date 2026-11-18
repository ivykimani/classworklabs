@extends('layouts.app')

@section('title', 'Fine Chakula Cafe')
@section('content')
<section class="hero">
 <div class="container hero-grid">
 <div>
 <p class="eyebrow">Fresh food. Easy ordering.</p>
 <h1>Enjoy your favourite meals without the long wait.</h1>
 <p class="lead">
 Browse our menu, choose your meal, place your order and track it online.
 </p>
 <div class="hero-actions">
 <a class="btn" href="{{ route('menu') }}">View Menu</a>
 <a class="btn btn-secondary" href="{{ route('login') }}">Customer Login</a>
 </div>
 </div>
 <div class="hero-card">
 <h2>How it works</h2>
 <ol>
 <li>Choose meals from the menu.</li>
 <li>Enter the quantity you want.</li>
 <li>Provide your order details.</li>
 <li>Receive login details and track your order.</li>
 </ol>
 </div>
 </div>
</section>
<section class="section">
 <div class="container">
 <div class="section-heading">
 <p class="eyebrow">Fine Chakula Cafe</p>
 <h2>Simple meals prepared for pickup or delivery.</h2>
 </div>
 <div class="three-column">
 <article class="info-card">
 <h3>Fresh Meals</h3>
 <p>Our sample menu includes main meals, snacks and drinks.</p>
 </article>
 <article class="info-card">
 <h3>Pickup or Delivery</h3>
 <p>Choose the order method that works for you during checkout.</p>
 </article>
 <article class="info-card">
 <h3>Order Tracking</h3>
 <p>Use the account created during checkout to follow your order status.</p>
 </article>
 </div>
 </div>
</section>
@endsection