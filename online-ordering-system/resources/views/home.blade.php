<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to {{ config('app.name', 'Our Store') }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navbar-logo">
            {{ config('app.name', 'Our Store') }}
        </div>
        <div class="navbar-links">
            <a href="/" class="nav-link">Home</a>
            <a href="/about-us" class="nav-link">About Us</a>
            <a href="#features" class="nav-link">Features</a>
            <a href="#shop" class="nav-btn">Shop Now</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <h1 class="hero-title">
            Elevate Your Everyday Life With <span class="hero-accent">Premium Essentials</span>
        </h1>
        <p class="hero-subtitle">
            Discover handpicked, high-quality gear and unique daily essentials designed around durability, innovation, and direct-to-you savings.
        </p>
        <div class="hero-actions">
            <a href="#shop" class="btn-primary">Explore Catalog</a>
            <a href="/about-us" class="btn-secondary">Learn Our Story</a>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="features-container">
            <h2 class="features-heading">Why Choose Our Platform</h2>
            
            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-card">
                    <div class="feature-icon">✓</div>
                    <h3 class="feature-title">Vetted Suppliers</h3>
                    <p class="feature-text">We test every logistical pipeline and product build ahead of time to eliminate surprises at your doorstep.</p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card">
                    <div class="feature-icon">🛡️</div>
                    <h3 class="feature-title">Secure Checkout</h3>
                    <p class="feature-text">Industry-leading client hashing encryption guarantees your financial detail safety and structural integrity.</p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3 class="feature-title">Fulfillment Logistics</h3>
                    <p class="feature-text">Streamlined direct-routing architecture bypasses overhead delays and keeps standard pricing down.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p class="footer-text">&copy; {{ date('Y') }} {{ config('app.name', 'Our Store') }}. All rights reserved.</p>
        <p class="footer-subtext">Crafted seamlessly with Laravel.</p>
    </footer>

</body>
</html>
