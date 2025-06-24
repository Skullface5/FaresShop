// Cart functions
function getCart() {
    const cart = localStorage.getItem('cart');
    return cart ? JSON.parse(cart) : [];
}

function saveCart(cart) {
    localStorage.setItem('cart', JSON.stringify(cart));
}

function updateCartCount() {
    const count = getCart().length;
    document.querySelectorAll('#cart-count').forEach(el => {
        el.textContent = count;
    });
}

// Initialize cart count on page load
document.addEventListener('DOMContentLoaded', () => {
    updateCartCount();
    document.getElementById('year').textContent = new Date().getFullYear();
});
