<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu | Tasty Eats</title>
    <!-- Standard link to your external unified stylesheet -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Navigation Bar (Matches Home and About) -->
    <nav class="navbar">
        <div class="navbar-logo">
            Tasty Eats
        </div>
       <div class="navbar-links">
            <a href="/" class="nav-link">Home</a>
            <a href="/about-us" class="nav-link">About Us</a>
            <a href="/contact-us" class="nav-link">Contact</a>
            <a href="/menu" class="nav-link">Our Menu</a>
            <a href="#" class="nav-btn cart-btn">
              <span class="cart-icon">🛒</span> Cart <span class="cart-badge">0</span>
            </a>
        </div>
    </nav>

    <!-- Menu Area -->
    <main class="menu-container">
        <header class="menu-header">
            <h1 class="hero-title">Explore Our <span class="hero-accent">Delicious Menu</span></h1>
            <p class="menu-subtitle">Freshly prepared dishes delivered hot and fast.</p>
        </header>

        <div class="menu-grid">
            <!-- Item 1: Burger -->
            <div class="food-card">
                <img src="images/burger.jpg" alt="Classic Cheese Burger" class="food-image">
                <div class="food-info">
                    <h3 class="food-title">Classic Cheese Burger</h3>
                    <p class="food-description">Flame-grilled beef patty layered with melted cheddar cheese, crisp lettuce, ripe tomatoes, and signature gourmet sauce on a toasted bun.</p>
                    <div class="food-footer">
                        <span class="food-price">KES 850</span>
                        <button class="add-to-cart-btn">Add to Order</button>
                    </div>
                </div>
            </div>

            <!-- Item 2: Pizza -->
            <div class="food-card">
                <img src="images/pizza.jpg" alt="Gourmet Pepperoni Pizza" class="food-image">
                <div class="food-info">
                    <h3 class="food-title">Gourmet Pepperoni Pizza</h3>
                    <p class="food-description">Fresh hand-tossed dough topped with premium zesty tomato sauce, gooey mozzarella cheese, and generous slices of cured pepperoni shards.</p>
                    <div class="food-footer">
                        <span class="food-price">KES 1,200</span>
                        <button class="add-to-cart-btn">Add to Order</button>
                    </div>
                </div>
            </div>

            <!-- Item 3: Salad -->
            <div class="food-card">
                <img src="images/salad.jpg" alt="Crunchy Caesar Salad" class="food-image">
                <div class="food-info">
                    <h3 class="food-title">Crunchy Caesar Salad</h3>
                    <p class="food-description">Crisp romaine hearts tossed in creamy garlic Caesar dressing, loaded with house-baked buttery croutons and shredded parmesan blocks.</p>
                    <div class="food-footer">
                        <span class="food-price">KES 650</span>
                        <button class="add-to-cart-btn">Add to Order</button>
                    </div>
                </div>
            </div>

            <!-- Item 4: Nyama Choma -->
            <div class="food-card">
                <img src="images/nyama-choma.jpg" alt="Flame-Grilled Nyama Choma" class="food-image">
                <div class="food-info">
                    <h3 class="food-title">Flame-Grilled Nyama Choma</h3>
                    <p class="food-description">Tender, slow-roasted local goat meat seasoned with sea salt, grilled over charcoal, and served with a fresh side of kachumbari.</p>
                    <div class="food-footer">
                        <span class="food-price">KES 1,500</span>
                        <button class="add-to-cart-btn">Add to Order</button>
                    </div>
                </div>
            </div>

            <!-- Item 5: Swahili Biryani -->
            <div class="food-card">
                <img src="images/biryani.jpg" alt="Swahili Chicken Biryani" class="food-image">
                <div class="food-info">
                    <h3 class="food-title">Swahili Chicken Biryani</h3>
                    <p class="food-description">Fragrant basmati rice infused with aromatic coastal spices, layered with tender marinated chicken cooked in a rich, flavorful thick sauce.</p>
                    <div class="food-footer">
                        <span class="food-price">KES 950</span>
                        <button class="add-to-cart-btn">Add to Order</button>
                    </div>
                </div>
            </div>

            <!-- Item 6: Fries -->
            <div class="food-card">
                <img src="images/fries.jpg" alt="Loaded Garlic Fries" class="food-image">
                <div class="food-info">
                    <h3 class="food-title">Loaded Garlic Fries</h3>
                    <p class="food-description">Crispy golden potato fries seasoned with roasted garlic herb sea salt dust and tossed in fresh finely-chopped garden parsley leaves.</p>
                    <div class="food-footer">
                        <span class="food-price">KES 400</span>
                        <button class="add-to-cart-btn">Add to Order</button>
                    </div>
                </div>
            </div>

            <!-- Item 7: BBQ Chicken Wings -->
            <div class="food-card">
                <img src="images/wings.jpg" alt="Honey BBQ Wings" class="food-image">
                <div class="food-info">
                    <h3 class="food-title">Honey BBQ Wings</h3>
                    <p class="food-description">Six pieces of crispy, deep-fried chicken wings tossed in a sweet and smoky hickory honey barbecue glaze, served with a cool ranch dip.</p>
                    <div class="food-footer">
                        <span class="food-price">KES 750</span>
                        <button class="add-to-cart-btn">Add to Order</button>
                    </div>
                </div>
            </div>

            <!-- Item 8: Chocolate Fudge Cake -->
            <div class="food-card">
                <img src="images/cake.jpg" alt="Decadent Fudge Cake" class="food-image">
                <div class="food-info">
                    <h3 class="food-title">Decadent Fudge Cake</h3>
                    <p class="food-description">A rich, moist slice of double chocolate layer cake smothered in smooth chocolate fudge frosting and topped with dark curls.</p>
                    <div class="food-footer">
                        <span class="food-price">KES 500</span>
                        <button class="add-to-cart-btn">Add to Order</button>
                    </div>
                </div>
            </div>

            <!-- Item 9: Mango Passion Smoothie -->
            <div class="food-card">
                <img src="images/mango_passion_smoothie.jpg" alt="Mango Passion Smoothie" class="food-image">
                <div class="food-info">
                    <h3 class="food-title">Mango Passion Smoothie</h3>
                    <p class="food-description">A refreshing chilled blend of real local mangoes and tangy passion fruit juice, freshly squeezed with zero artificial additives.</p>
                    <div class="food-footer">
                        <span class="food-price">KES 350</span>
                        <button class="add-to-cart-btn">Add to Order</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <!-- Brand Column -->
            <div class="footer-brand-column">
                <div class="navbar-logo" style="padding: 0; margin-bottom: 15px;">Tasty Eats</div>
                <p class="footer-brand-text">Freshly prepared local dishes delivered hot, fresh, and straight to your doorstep across Nairobi and its environs.</p>
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
