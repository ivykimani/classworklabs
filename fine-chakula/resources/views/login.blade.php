@extends('layouts.app')
@section('title', 'Login - Fine Chakula Cafe')
@section('content')
<section class="section">
 <div class="container narrow">
 <div class="panel">
 <p class="eyebrow">Account Access</p>
 <h1>Login</h1>
 <p>Customers and administrators use the same login page.</p>
 <form method="POST" action="{{ route('login.submit') }}">
 @csrf
 <div class="form-group">
 <label for="email">Email Address</label>
 <input id="email" type="email" name="email" value="{{ old('email') }}" required
autofocus>
 </div>
 <div class="form-group">
 <label for="password">Password</label>
 <input id="password" type="password" name="password" required>
 </div>
 <button class="btn" type="submit">Login</button>
 </form>
 </div>
 </div>
</section>
@endsection