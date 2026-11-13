document.addEventListener('DOMContentLoaded', () => {
    // 1. INITIALIZE STATE: Load saved items from localStorage or start empty
    let cart = JSON.parse(localStorage.getItem('tasty_eats_cart')) || [];

    // DOM Target Node Mapping
    const cartToggle = document.getElementById('cart-toggle');
    const cartSidebar = document.getElementById('cart-sidebar');
    const closeCart = document.getElementById('close-cart');
    const cartOverlay = document.getElementById('cart-overlay');
    const cartBadge = document.getElementById('cart-badge');
    const cartItemsContainer = document.getElementById('cart-items-container');
    const cartTotalPrice = document.getElementById('cart-total-price');
    const addToOrderButtons = document.querySelectorAll('.add-to-cart-btn');

    // Run immediately on page load to restore items if they exist
    renderCartUI();

    // 2. OPEN & CLOSE CONNECTIONS
    cartToggle.addEventListener('click', (e) => {
        e.preventDefault();
        cartSidebar.classList.add('active');
        cartOverlay.classList.add('active');
    });

    const hideCartDrawer = () => {
        cartSidebar.classList.remove('active');
        cartOverlay.classList.remove('active');
    };

    closeCart.addEventListener('click', hideCartDrawer);
    cartOverlay.addEventListener('click', hideCartDrawer);

    // 3. PARSE VALUES FROM SELECTED ELEMENT ROW
    addToOrderButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const foodCard = e.target.closest('.food-card');
            const name = foodCard.querySelector('.food-title').textContent.trim();
            const priceText = foodCard.querySelector('.food-price').textContent.trim();
            
            // Isolates numbers from text string labels (e.g., KES 1,200 -> 1200)
            const price = parseInt(priceText.replace(/[^0-9]/g, ''), 10);

            addItemToCart(name, price);
            
            // Slide sidebar out automatically to indicate action success
            cartSidebar.classList.add('active');
            cartOverlay.classList.add('active');
        });
    });

    // 4. ARRAY STATE INSTANCE CONTROLLERS
    function addItemToCart(name, price) {
        const existingItem = cart.find(item => item.name === name);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({ name, price, quantity: 1 });
        }
        
        // Save to local storage after adding an item
        saveCartToStorage();
        renderCartUI();
    }

    // 5. ATTACH REMOVAL ALGORITHM TO GLOBAL RUNTIME WINDOW CONTEXT
    window.removeItemFromCart = function(name) {
        cart = cart.filter(item => item.name !== name);
        
        // Save to local storage after removing an item
        saveCartToStorage();
        renderCartUI();
    };

    // 6. PERSISTENCE PERSIST ENGINE
    function saveCartToStorage() {
        localStorage.setItem('tasty_eats_cart', JSON.stringify(cart));
    }

    // 7. SYNCHRONIZE AND DISPLAY RENDER STATE CHANGES
    function renderCartUI() {
        const totalItemsCount = cart.reduce((sum, item) => sum + item.quantity, 0);
        cartBadge.textContent = totalItemsCount;

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
                        <span>${item.quantity} x KES ${item.price.toLocaleString()}</span>
                    </div>
                    <button class="remove-item-btn" onclick="removeItemFromCart('${item.name}')">Remove</button>
                </div>
            `;
            cartItemsContainer.insertAdjacentHTML('beforeend', itemRowHTML);
        });

        cartTotalPrice.textContent = `KES ${totalCalculatedSpend.toLocaleString()}`;
    }
});

