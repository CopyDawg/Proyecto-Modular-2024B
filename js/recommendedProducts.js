import { loMasPedido, añadirCarrito } from './base_Datos.js';
import { agregarProducto } from './CarritoCompras2.js';

const container = document.querySelector('.image-container');

const renderProducts = async () => {
    container.innerHTML = `
        <div class="loader"></div>
    `;
    await getProducts();
    container.innerHTML = '';
    loMasPedido.forEach(product => {
        const productDiv = document.createElement('div');
        productDiv.classList.add('product-card');
        productDiv.innerHTML = `
            <img src="${product.url}" alt="${product.nombre}" class="product-image" />
            <h4 class="product-name">${product.nombre}</h4>
            <p class="product-price">$${product.precio} MXN</p>
            <button class="recommended-product-button botonTarjeta">Agregar al carrito</button>
        `;
        const button = productDiv.querySelector('.recommended-product-button');
        button.addEventListener('click', () => {
            agregarProducto(product);
        });
        container.appendChild(productDiv);
    });
};

const getProducts = async () => {
    return new Promise(resolve => setTimeout(resolve, 3000));
}

await renderProducts(loMasPedido);
