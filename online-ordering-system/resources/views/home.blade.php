<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Tasty Eats</title>
    <!-- Standard relative link to your external stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navbar-logo">
            Tasty Eats
        </div>
        <div class="navbar-links">
            <a href="/" class="nav-link">Home</a>
            <a href="/about-us" class="nav-link">About Us</a>
            <a href="/contact-us" class="nav-link">Contact</a>
            <a href="/menu" class="nav-link">Our Menu</a>
            <a href="#" id="cart-toggle" class="nav-btn cart-btn">
                <span class="cart-icon">🛒</span> Cart <span id="cart-badge" class="cart-badge">0</span>
            </a>

        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <h1 class="hero-title">
            Delicious Meals Delivered Straight To <span class="hero-accent">Your Doorstep</span>
        </h1>
        <p class="hero-subtitle">
            Satisfy your cravings with handpicked local ingredients, freshly prepared dishes, and lightning-fast local
            delivery architectures.
        </p>
        <div class="hero-actions">
            <a href="/menu" class="btn-primary">Explore Menu</a>
            <a href="/about-us" class="btn-secondary">Our Kitchen Story</a>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="features-container">
            <h2 class="features-heading">Why Order From Tasty Eats</h2>

            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-card">
                    <div class="feature-icon">🍳</div>
                    <h3 class="feature-title">Fresh Ingredients</h3>
                    <p class="feature-text">We source premium produce and choice ingredients daily from trusted partners
                        to guarantee fresh flavors.</p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card">
                    <div class="feature-icon">🛡️</div>
                    <h3 class="feature-title">Hygiene Certified</h3>
                    <p class="feature-text">Industry-leading safety protocols, secure handling, and clean kitchen
                        validation keep your meals safe.</p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3 class="feature-title">Express Delivery</h3>
                    <p class="feature-text">Streamlined dispatching routing minimizes transit times to ensure your food
                        arrives piping hot.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="js/cart.js"></script>


    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <!-- Brand Column -->
            <div class="footer-brand-column">
                <div class="navbar-logo" style="padding: 0; margin-bottom: 15px;">Tasty Eats</div>
                <p class="footer-brand-text">Freshly prepared local dishes delivered hot, fresh, and straight to your
                    doorstep across Nairobi and its environs.</p>
                <div class="footer-socials">
                    <a href="#" class="social-link">📘</a>
                    <a href="#" class="social-link">📸</a>
                    <a href="#" class="social-link">🕊️</a>
                    <a href="#" class="social-link">💬</a>
                </div>
            </div>

            <!-- Quick Links Links Column -->
            <div class="footer-links-column">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/menu">Our Menu</a></li>
                    <li><a href="/about-us">About Us</a></li>
                    <li><a href="/contact-us">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact & Hours Column -->
            <div class="footer-links-column">
                <h4 class="footer-heading">Get In Touch</h4>
                <p class="footer-info-item">📍 CBD, Nairobi, Kenya</p>
                <p class="footer-info-item">📞 +254 700 000 000</p>
                <p class="footer-info-item">📧 hello@tastyeats.co.ke</p>
                <p class="footer-info-item">🕒 Mon - Fri: 9AM - 5PM EAT</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-text">&copy; 2026 Tasty Eats. All rights reserved.</p>
            <p class="footer-subtext">Crafted seamlessly with HTML & CSS.</p>
        </div>
    </footer>
</body>

</html>