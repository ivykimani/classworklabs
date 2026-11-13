<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Tasty Eats</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <nav class="navbar">
        <div class="navbar-logo">Tasty Eats</div>
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

    <!-- CONTENT WRAPPER -->
    <div class="info-page-container">

        <header class="info-page-header">
            <h1 class="info-page-title">Contact Us</h1>
            <p class="info-page-subtitle">Questions about an order, our menu or delivery? We'd love to hear from you.
            </p>
        </header>

        <div class="contact-split-grid">

            <section>
                <h2 class="info-section-heading">Get In Touch</h2>
                <p class="feature-text">
                    Whether you need help with an order, have a question about a dish, or just want to say hello, our
                    team is ready to help.
                </p>

                <div class="contact-info-block">
                    <strong class="contact-block-label">📧 Email Support</strong>
                    <a href="mailto:tastyeats@gmail.com" class="contact-email-link">tastyeats@gmail.com</a>
                    <span class="contact-block-subtext">We respond within 24 hours.</span>
                </div>

                <div class="contact-info-block">
                    <strong class="contact-block-label">📞 Call or WhatsApp</strong>
                    <a href="tel:+254700000000" class="contact-email-link">+254 700 000 000</a>
                </div>

                <div class="contact-info-block">
                    <strong class="contact-block-label">🕒 Business Hours</strong>
                    <span class="contact-hours-text">Monday – Friday</span>
                    <span class="contact-block-subtext">9:00 AM – 5:00 PM EAT</span>
                </div>
            </section>

            <section>
                <h2 class="info-section-heading">Send a Message</h2>

                <!-- Dynamic form success message placeholder (uncomment if using JS to submit)
                <div class="alert alert-success">Your message has been sent successfully!</div> 
                -->

                <form action="#" method="POST" class="styled-contact-form">

                    <div class="custom-form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required placeholder="John Doe">
                    </div>

                    <div class="custom-form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required placeholder="john@example.com">
                    </div>

                    <div class="custom-form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required
                            placeholder="How can we help you today?"></textarea>
                    </div>

                    <button type="submit" class="contact-submit-btn">Send Message</button>
                </form>
            </section>

        </div>
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