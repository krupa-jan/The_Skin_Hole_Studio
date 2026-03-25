// Objekt pro uložení produktů. Klíčem bude ID produktu.
let cart = {};

// Přepínání záložek
function switchTab(tabId) {
    document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));

    document.getElementById(tabId).classList.add('active');
    event.currentTarget.classList.add('active');
}

// Přidání do košíku (s podporou více kusů)
function addToCart(serviceName, serviceId) {
    if (cart[serviceId]) {
        cart[serviceId].quantity += 1;
    } else {
        cart[serviceId] = {
            name: serviceName,
            quantity: 1
        };
    }
    updateCartUI();
}

// Odejmutí jednoho kusu z košíku
function removeFromCart(serviceId) {
    if (cart[serviceId]) {
        cart[serviceId].quantity -= 1;
        if (cart[serviceId].quantity <= 0) {
            delete cart[serviceId];
        }
        updateCartUI();
    }
}

// Vykreslení košíku
function updateCartUI() {
    const cartList = document.getElementById('cart-items');
    const checkoutBtn = document.getElementById('checkout-btn');
    
    cartList.innerHTML = '';
    
    const cartKeys = Object.keys(cart);

    if (cartKeys.length === 0) {
        cartList.innerHTML = '<li class="empty-cart">Zatím jste nevybrali žádnou službu.</li>';
        checkoutBtn.disabled = true;
    } else {
        cartKeys.forEach(id => {
            const item = cart[id];
            const li = document.createElement('li');
            li.innerHTML = `
                <div class="cart-item-info">
                    <span class="item-qty">${item.quantity}x</span>
                    <span class="item-name">${item.name}</span>
                </div>
                <button class="remove-btn" onclick="removeFromCart('${id}')" title="Odebrat">×</button>
            `;
            cartList.appendChild(li);
        });
        checkoutBtn.disabled = false;
    }
}

// Příprava na odeslání do PHP
function submitReservation() {
    console.log("Odesílám data:", cart);
    alert("Probíhá příprava databáze, tato akce je nedostupná!");
}