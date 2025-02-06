document.addEventListener('DOMContentLoaded', function () {
    const cartItemsList = document.getElementById('cart-items');
    const clearCartButton = document.getElementById('clear-cart');

    // Função para renderizar os itens do carrinho
    function renderCartItems() {
        const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        cartItemsList.innerHTML = '';
        cartItems.forEach((item, index) => {
            const listItem = document.createElement('li');
            listItem.textContent = `${item.name} - R$ ${item.price.toFixed(2)}`;
            listItem.classList.add("list-group-item");
            const removeButton = document.createElement('button');
            removeButton.textContent = 'Remover';
            removeButton.classList.add('btn', 'btn-danger', 'btn-sm', 'float-right');
            removeButton.addEventListener('click', function () {
                removeCartItem(index);
            });
            listItem.appendChild(removeButton);
            cartItemsList.appendChild(listItem);
        });
    }

    // Função para remover um item do carrinho
    function removeCartItem(index) {
        const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        cartItems.splice(index, 1);
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
        renderCartItems();
    }

    // Função para limpar o carrinho
    clearCartButton.addEventListener('click', function () {
        localStorage.removeItem('cartItems');
        renderCartItems();
    });

    // Renderização inicial
    renderCartItems();
});