<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Tasty Eats</title>
    <!-- Relative link to your external master stylesheet for the Navbar and Footer -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body
    style="margin: 0; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background-color: #fcfcfb; color: #1c1c1a; line-height: 1.6;">

    <!-- Navigation Bar (Maintained consistency with Home and Menu layouts) -->
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
        </div>
    </nav>

    <!-- Main Content Container -->
    <div class="about-container" style="max-width: 850px; margin: 0 auto; padding: 60px 20px;">

        <!-- Header Section with soft drop shadow container -->
        <header
            style="text-align: center; margin-bottom: 50px; background: white; padding: 40px 20px; border-radius: 16px; border: 1px solid #f1f1eb; box-shadow: 0 4px 6px rgba(27,27,24,0.02);">
            <h1
                style="font-size: 2.75rem; font-weight: 800; margin: 0 0 10px 0; color: #11110f; letter-spacing: -0.025em;">
                About Our Kitchen</h1>
            <p style="font-size: 1.25rem; color: #dc2626; font-weight: 600; margin: 0;">Welcome to Tasty Eats</p>
        </header>

        <!-- Brand Introduction -->
        <section
            style="margin-bottom: 50px; background: white; padding: 35px; border-radius: 16px; border: 1px solid #f1f1eb;">
            <p style="font-size: 1.2rem; margin-bottom: 20px; color: #11110f; line-height: 1.7; font-weight: 500;">
                Welcome to <strong style="color: #dc2626;">Tasty Eats</strong>, your go-to destination for thoughtfully
                curated, high-quality meals designed to satisfy your daily cravings.
            </p>
            <p style="color: #57574e; font-size: 1.05rem;">
                We started with a simple idea: delicious, restaurant-quality food should be accessible, affordable, and
                completely hassle-free to order. Today, we bridge the gap between talented local kitchens and your
                doorstep, bringing you premium dishes without the premium wait times.
            </p>
        </section>

        <!-- Our Mission block with left accent border -->
        <section
            style="margin-bottom: 50px; background: #fff5f5; padding: 35px; border-radius: 16px; border-left: 5px solid #dc2626;">
            <h2
                style="font-size: 1.8rem; font-weight: 800; margin-top: 0; margin-bottom: 15px; color: #11110f; letter-spacing: -0.02em;">
                Our Mission</h2>
            <p style="color: #4b4b43; font-size: 1.1rem; margin: 0; line-height: 1.7;">
                To simplify your dining experience by sourcing dependable, fresh, and flavorful meals from trusted local
                culinary partners. We handle the logistical heavy lifting and dispatch routing so you can focus entirely
                on enjoying your food.
            </p>
        </section>

        <!-- Why Order Grid (Transformed from a plain list to structured grid rows) -->
        <section style="margin-bottom: 50px;">
            <h2
                style="font-size: 2rem; font-weight: 800; margin-bottom: 30px; color: #11110f; text-align: center; letter-spacing: -0.02em;">
                Why Order From Us?</h2>

            <div style="display: grid; gap: 20px;">
                <!-- Card 1 -->
                <div
                    style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #f1f1eb; display: flex; gap: 20px; align-items: flex-start;">
                    <span
                        style="background: #fef2f2; color: #dc2626; font-weight: bold; padding: 8px 12px; border-radius: 8px; font-size: 1.1rem;">✓</span>
                    <div>
                        <strong
                            style="font-size: 1.15rem; color: #11110f; display: block; margin-bottom: 5px;">Handpicked
                            Quality</strong>
                        <span style="color: #57574e; font-size: 1rem;">We vet every partner kitchen and review every
                            menu item to ensure it meets our strict hygiene and flavor standards before it ever reaches
                            our catalog.</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #f1f1eb; display: flex; gap: 20px; align-items: flex-start;">
                    <span
                        style="background: #fef2f2; color: #dc2626; font-weight: bold; padding: 8px 12px; border-radius: 8px; font-size: 1.1rem;">✓</span>
                    <div>
                        <strong
                            style="font-size: 1.15rem; color: #11110f; display: block; margin-bottom: 5px;">Direct-to-You
                            Value</strong>
                        <span style="color: #57574e; font-size: 1rem;">By optimizing our localized delivery networks, we
                            pass efficient operational savings straight down to your final bill.</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #f1f1eb; display: flex; gap: 20px; align-items: flex-start;">
                    <span
                        style="background: #fef2f2; color: #dc2626; font-weight: bold; padding: 8px 12px; border-radius: 8px; font-size: 1.1rem;">✓</span>
                    <div>
                        <strong style="font-size: 1.15rem; color: #11110f; display: block; margin-bottom: 5px;">Secure
                            Shopping</strong>
                        <span style="color: #57574e; font-size: 1rem;">Your transaction safety is our priority. We use
                            industry-standard encryption protocols to protect your billing and payment detail
                            experience.</span>
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #f1f1eb; display: flex; gap: 20px; align-items: flex-start;">
                    <span
                        style="background: #fef2f2; color: #dc2626; font-weight: bold; padding: 8px 12px; border-radius: 8px; font-size: 1.1rem;">✓</span>
                    <div>
                        <strong
                            style="font-size: 1.15rem; color: #11110f; display: block; margin-bottom: 5px;">Dedicated
                            Support</strong>
                        <span style="color: #57574e; font-size: 1rem;">Have an urgent question about a delivery tracking
                            status or an ingredient detail? Our customer care agents are standing by to help at any step
                            of your meal lifecycle.</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Operational Architecture -->
        <section
            style="margin-bottom: 50px; background: white; padding: 35px; border-radius: 16px; border: 1px solid #f1f1eb;">
            <h2
                style="font-size: 1.8rem; font-weight: 800; margin-top: 0; margin-bottom: 15px; color: #11110f; letter-spacing: -0.02em;">
                How We Work</h2>
            <p style="color: #57574e; font-size: 1.05rem; margin: 0; line-height: 1.7;">
                We operate on a streamlined fulfillment model. The moment you place an order on our platform, your food
                is freshly prepared, packed, and dispatched directly from our nearest partner kitchen centers straight
                to your specific location. This modern logistics approach keeps your meals fresh, reduces food waste,
                and allows us to offer hot, competitive delivery options across our entire network.
            </p>
        </section>

        <!-- Soft Closing Sticky Note -->
        <footer style="text-align: center; margin-top: 50px; padding: 30px 20px; border-top: 1px solid #efefe9;">
            <p style="font-size: 1.2rem; font-style: italic; color: #4b4b43; font-weight: 500; margin: 0;">Thank you for
                choosing Tasty Eats. We are glad to have you here!</p>
        </footer>

    </div>

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