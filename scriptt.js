// Inicializar variables
const cartItems=document.getElementById('cart-items');
const cartTotal=document.getElementById('cart-total');
const checkoutButton=document.getElementById('checkout');

let cart=[];
let total=0;

// Función para agregar un producto al carrito
function addToCart(price){
    cart.push(price);
    updateCart();
}

// Función para actualizar el carrito y el total
function updateCart(){
    cartItems.innerHTML= '';
    total = 0;
    
    cart.forEach(price => {
        const li = document.createElement('li');
        li.textContent = `Precio: $${price.toFixed(2)}`;
        cartItems.appendChild(li);
        total+=price;
    });

    cartTotal.textContent = `$${total.toFixed(2)}`;
}

// Evento click para agregar productos al carrito
const addToCartButtons=document.querySelectorAll('.add-to-cart');
addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        const price = parseFloat(button.getAttribute('data-price'));
        addToCart(price);
    });
});

// Evento click para finalizar la compra
checkoutButton.addEventListener('click', () => {
    alert(`Gracias por comprar en JLHER, el total de tu inversión ha sido $${total.toFixed(2)}`);
    cart = [];
    updateCart();
});