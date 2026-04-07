document.addEventListener('DOMContentLoaded', () => {
    const rawData = localStorage.getItem('skin_hole_cart');
    const input = document.getElementById('cart-data-input');
    const summary = document.getElementById('cart-summary');

    if (!rawData || rawData === '{}') {
        alert('Košík je prázdný, vracím vás k výběru.');
        window.location.href = 'rezervace.php';
        return;
    }

    input.value = rawData;

    const cart = JSON.parse(rawData);
    let html = '<h3>Vybrané služby:</h3><ul>';
    let total = 0;
    
    for (const id in cart) {
        const item = cart[id];
        html += `<li><strong>${item.quantity}x</strong> ${item.name}</li>`;
    }
    html += '</ul>';
    summary.innerHTML = html;
});
