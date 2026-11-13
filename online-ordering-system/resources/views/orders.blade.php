<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incoming Orders | Tasty Eats Admin</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="navbar-logo">Tasty Eats <span style="font-size: 0.9rem; color: #57574e;">Admin</span></div>
        <div class="navbar-links">
            <a href="/" class="nav-link">Home</a>
            <a href="/menu" class="nav-link">Our Menu</a>
            <a href="/admin/orders" class="nav-btn">Orders Dashboard</a>
        </div>
    </nav>

    <main class="menu-container">
        <header class="menu-header">
            <h1 class="hero-title">Incoming <span class="hero-accent">Orders</span></h1>
            <p class="menu-subtitle">Manage customer orders and update delivery statuses in real time.</p>
        </header>

        @if (session('success'))
            <div style="background-color: #dcfce7; color: #166534; padding: 14px 20px; border-radius: 8px; margin-bottom: 25px; font-weight: 600;">
                {{ session('success') }}
            </div>
        @endif

        @if ($orders->isEmpty())
            <p style="text-align: center; color: #57574e; font-size: 1.1rem;">No orders have been placed yet.</p>
        @else
            <div style="display: grid; gap: 20px;">
                @foreach ($orders as $order)
                    <div class="food-card" style="padding: 24px;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 15px; border-bottom: 1px solid #efefe9; padding-bottom: 15px; margin-bottom: 15px;">
                            <div>
                                <h3 class="food-title" style="margin-bottom: 4px;">Order #{{ $order->id }} — {{ $order->customer_name }}</h3>
                                <p style="margin: 0; color: #57574e; font-size: 0.95rem;">
                                    📞 {{ $order->customer_phone }} &nbsp;|&nbsp; 🕒 {{ $order->created_at->format('d M Y, h:i A') }}
                                </p>
                            </div>
                            <div style="text-align: right;">
                                <span class="food-price" style="display: block; margin-bottom: 8px;">KES {{ number_format($order->total_amount) }}</span>
                                <form action="/admin/orders/{{ $order->id }}/status" method="POST" style="display: inline-flex; gap: 8px;">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" style="padding: 6px 10px; border-radius: 6px; border: 1px solid #e2e2de; font-weight: 600;">
                                        <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="preparing" {{ $order->status === 'preparing' ? 'selected' : '' }}>Preparing</option>
                                        <option value="delivered" {{ $order->status === 'delivered' ? 'selected' : '' }}>Delivered</option>
                                        <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    </select>
                                    <button type="submit" class="add-to-cart-btn" style="padding: 6px 14px;">Update</button>
                                </form>
                            </div>
                        </div>

                        <div>
                            <strong style="display: block; margin-bottom: 8px; color: #11110f;">Ordered Dishes:</strong>
                            <ul style="margin: 0; padding-left: 20px; color: #4b4b43;">
                                @foreach ($order->items as $item)
                                    <li style="margin-bottom: 4px;">
                                        <strong>{{ $item['quantity'] }}x</strong> {{ $item['name'] }} (KES {{ number_format($item['price'] * $item['quantity']) }})
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </main>

</body>
</html>
