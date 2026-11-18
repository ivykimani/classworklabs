<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>@yield('title', 'Fine Chakula Cafe')</title>
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 </head>
<body>
 <header class="site-header">
 <div class="container nav-wrap">
 <a class="brand" href="{{ route('home') }}">Fine Chakula Cafe</a>
 <nav class="nav-links">
 <a href="{{ route('home') }}">Home</a>
 <a href="{{ route('menu') }}">Menu</a>
 @auth
 @if(auth()->user()->role === 'admin')
 <a href="{{ route('admin.dashboard') }}">Admin Orders</a>
 @else
 <a href="{{ route('customer.dashboard') }}">My Orders</a>
 @endif
 <form class="inline-form" method="POST" action="{{ route('logout') }}">
 @csrf
<button class="link-button" type="submit">Logout</button>
 </form>
 @else
 <a href="{{ route('login') }}">Login</a>
 @endauth
 </nav>
 </div>
 </header>
 <main>
 <div class="container messages">
 @if(session('success'))
 <div class="alert success">{{ session('success') }}</div>
 @endif
 @if($errors->any())
 <div class="alert error">
 <strong>Please correct the following:</strong>
 <ul>
 @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
</div>
 @yield('content')
 </main>
 <footer class="site-footer">
 <div class="container">
 <p>&copy; {{ date('Y') }} Fine Chakula Cafe. Fresh meals, simple ordering.</p>
 </div>
 </footer>
</body>
</html>
