document.addEventListener('DOMContentLoaded', () => {
    let cart = JSON.parse(localStorage.getItem('tasty_eats_cart')) || [];

    const cartToggle = document.getElementById('cart-toggle');
    const cartSidebar = document.getElementById('cart-sidebar');
    const closeCart = document.getElementById('close-cart');
    const cartOverlay = document.getElementById('cart-overlay');
    const cartBadge = document.getElementById('cart-badge');
    const cartItemsContainer = document.getElementById('cart-items-container');
    const cartTotalPrice = document.getElementById('cart-total-price');
    const addToOrderButtons = document.querySelectorAll('.add-to-cart-btn');
    const checkoutBtn = document.getElementById('checkout-btn');

    renderCartUI();

    // 1. SAFE DRAWER OPEN / CLOSE CONTROLS
    if (cartToggle && cartSidebar && cartOverlay) {
        cartToggle.addEventListener('click', (e) => {
            e.preventDefault();
            cartSidebar.classList.add('active');
            cartOverlay.classList.add('active');
        });
    }

    const hideCartDrawer = () => {
        if (cartSidebar) cartSidebar.classList.remove('active');
        if (cartOverlay) cartOverlay.classList.remove('active');
    };

    if (closeCart) closeCart.addEventListener('click', hideCartDrawer);
    if (cartOverlay) cartOverlay.addEventListener('click', hideCartDrawer);

    // 2. ADD DISHES TO CART
    addToOrderButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const foodCard = e.target.closest('.food-card');
            if (!foodCard) return;

            const name = foodCard.querySelector('.food-title').textContent.trim();
            const priceText = foodCard.querySelector('.food-price').textContent.trim();
            const price = parseInt(priceText.replace(/[^0-9]/g, ''), 10);

            addItemToCart(name, price);

            if (cartSidebar && cartOverlay) {
                cartSidebar.classList.add('active');
                cartOverlay.classList.add('active');
            }
        });
    });

    function addItemToCart(name, price) {
        const existingItem = cart.find(item => item.name === name);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({ name, price, quantity: 1 });
        }
        saveCartToStorage();
        renderCartUI();
    }

    // 3. CHANGE QUANTITY OR REMOVE DISH FROM CART
    window.updateItemQuantity = function(name, change) {
        const item = cart.find(i => i.name === name);
        if (!item) return;

        item.quantity += change;

        if (item.quantity <= 0) {
            cart = cart.filter(i => i.name !== name);
        }

        saveCartToStorage();
        renderCartUI();
    };

    window.removeItemFromCart = function(name) {
        cart = cart.filter(item => item.name !== name);
        saveCartToStorage();
        renderCartUI();
    };

    function saveCartToStorage() {
        localStorage.setItem('tasty_eats_cart', JSON.stringify(cart));
    }

    // 4. UPDATE NAVBAR BADGE & SIDEBAR UI
    function renderCartUI() {
        const totalItemsCount = cart.reduce((sum, item) => sum + item.quantity, 0);
        if (cartBadge) {
            cartBadge.textContent = totalItemsCount;
        }

        if (!cartItemsContainer || !cartTotalPrice) return;

        cartItemsContainer.innerHTML = '';

        if (cart.length === 0) {
            cartItemsContainer.innerHTML = '<p class="empty-cart-text">Your cart is currently empty.</p>';
            cartTotalPrice.textContent = 'KES 0';
            return;
        }

        let totalCalculatedSpend = 0;

        cart.forEach(item => {
            const rowCost = item.price * item.quantity;
            totalCalculatedSpend += rowCost;

            const itemRowHTML = `
                <div class="cart-item-row">
                    <div class="cart-item-details">
                        <h4>${item.name}</h4>
                        <span>KES ${item.price.toLocaleString()} each</span>
                        <div class="qty-controls">
                            <button type="button" class="qty-btn" onclick="updateItemQuantity('${item.name}', -1)">−</button>
                            <span class="qty-value">${item.quantity}</span>
                            <button type="button" class="qty-btn" onclick="updateItemQuantity('${item.name}', 1)">+</button>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <strong style="display: block; margin-bottom: 6px;">KES ${rowCost.toLocaleString()}</strong>
                        <button type="button" class="remove-item-btn" onclick="removeItemFromCart('${item.name}')">Remove</button>
                    </div>
                </div>
            `;
            cartItemsContainer.insertAdjacentHTML('beforeend', itemRowHTML);
        });

        cartTotalPrice.textContent = `KES ${totalCalculatedSpend.toLocaleString()}`;
    }

    // 5. CHECKOUT SUBMISSION TO LARAVEL BACKEND
    if (checkoutBtn) {
        checkoutBtn.addEventListener('click', async () => {
            if (cart.length === 0) {
                alert('Your cart is empty! Please add a dish before checking out.');
                return;
            }

            const nameInput = document.getElementById('customer-name');
            const phoneInput = document.getElementById('customer-phone');
            const customerName = nameInput ? nameInput.value.trim() : '';
            const customerPhone = phoneInput ? phoneInput.value.trim() : '';

            if (!customerName || !customerPhone) {
                alert('Please enter your name and phone number so we can deliver your order.');
                return;
            }

            const csrfMeta = document.querySelector('meta[name="csrf-token"]');
            if (!csrfMeta) {
                alert('Security token missing. Please ensure the csrf-token meta tag is in your page head.');
                return;
            }

            const totalAmount = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const csrfToken = csrfMeta.getAttribute('content');

            checkoutBtn.disabled = true;
            checkoutBtn.textContent = 'Placing Order...';

            try {
                const response = await fetch('/checkout', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        customer_name: customerName,
                        customer_phone: customerPhone,
                        items: cart,
                        total_amount: totalAmount
                    })
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    alert(data.message);
                    cart = [];
                    saveCartToStorage();
                    renderCartUI();
                    if (nameInput) nameInput.value = '';
                    if (phoneInput) phoneInput.value = '';
                    hideCartDrawer();
                } else {
                    alert(data.message || 'Error placing order. Please check your details and try again.');
                }
            } catch (error) {
                alert('Network error. Make sure your server is running.');
            } finally {
                checkoutBtn.disabled = false;
                checkoutBtn.textContent = 'Proceed to Checkout';
            }
        });
    }
});
