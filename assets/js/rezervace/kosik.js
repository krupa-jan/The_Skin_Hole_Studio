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

    showNotification(`<b>${serviceName}</b> přidáno do košíku!`);
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

function showNotification(message) {
    const area = document.getElementById('notification-area');
    if (!area) return; // Pojistka, kdyby chyběl div v HTML

    const toast = document.createElement('div');
    toast.className = 'toast-notification';
    
    toast.innerHTML = `
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#4caf50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
            <polyline points="22 4 12 14.01 9 11.01"></polyline>
        </svg>
        <span>${message}</span>
    `;

    area.appendChild(toast);

    setTimeout(() => {
        toast.classList.add('fade-out');
        toast.addEventListener('animationend', () => {
            toast.remove();
        });
    }, 3000);
}

// Příprava na odeslání do PHP
function submitReservation() {
    console.log("Odesílám data:", cart);
    alert("Probíhá příprava databáze, tato akce je nedostupná!");
}

