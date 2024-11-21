import { loMasPedido } from './base_Datos.js';
import { agregarProducto } from './CarritoCompras2.js';

const container = document.querySelector('.image-container');

const renderProducts = async () => {
    var misProd = []
    container.innerHTML = `
        <div class="loader"></div>
    `;
    misProd = await getProducts();
    container.innerHTML = '';
    if (!Array.isArray(misProd) || misProd.length === 0) {
        misProd = []
        for (let i = 0; i < 3; i++) {
            misProd.push(loMasPedido[i])
        }
    }
    misProd.forEach(product => {
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

const getIds = () => {
    var arrayIds = [];
    if (localStorage.key(0) === null) {
        localStorage.setItem('carrito', JSON.stringify([]));
    }
    var carrito = JSON.parse(localStorage.getItem('carrito'));
    carrito.forEach(prod => {
        arrayIds.push(prod.id);
    })
    return arrayIds;
}

const getProducts = async () => {
    var ids = getIds();
    if(ids.length == 0) {
        ids = [16, 8];
    }
    try {
        const response = await fetch('https://modelo-datos-modular-95e96ca4ce9f.herokuapp.com/recomendaciones', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                ids_articulos: ids
            })
        });
        const recomendaciones = await response.json();
        return recomendaciones;
    } catch (error) {
        console.log(`Error al consumir datos: ${error}`)
        return []
    }
};

await renderProducts();
