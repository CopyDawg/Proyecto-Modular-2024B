const spanCarrito = document.getElementById('carritoIcon');
//var badge = document.createElement('span');
// import * as dateBase from "./base_Datos.js";

let carrito = [];

// FUNCION PARA CONTADOR DEL CARRITO
export function contadorCarrito(){
    if (localStorage.key(0) === null) {
        localStorage.setItem('carrito', JSON.stringify([]));
    }
    carrito = JSON.parse(localStorage.getItem('carrito'));
    let badge = document.createElement('span');
    badge.classList.add('position-absolute', 'translate-middle', 'badge', 'rounded-pill', 'bg-danger');
    badge.setAttribute('id', 'carritoContador');
    badge.textContent = calcularProductos();
    spanCarrito.append(badge);
}

function calcularProductos() {
    let total = 0;
    carrito.forEach( (producto) => {
        total += producto.cantidad;
    });
    return total;
}

contadorCarrito();