const mainContainerTarjetas = document.getElementById('elementosCarritos');

const spanCarrito = document.getElementById('carritoIcon');
const total = document.getElementById('total');
//var badge = document.createElement('span');
import * as dateBase from "./base_Datos.js";

let carrito = JSON.parse(localStorage.getItem('carrito'));


// FUNCION PARA CONTADOR DEL CARRITO
export function contadorCarrito(){
    spanCarrito.innerHTML = "";
    let imgCarrito = document.createElement('IMG');
    imgCarrito.setAttribute('src', '../assets/icons/iconoCarrito.png');
    imgCarrito.setAttribute('id', 'iconoCarrito');
    let badge = document.createElement('span');
    badge.classList.add('position-absolute', 'translate-middle', 'badge', 'rounded-pill', 'bg-danger');
    badge.setAttribute('id', 'carritoContador');
    badge.textContent = calcularProductos();
    spanCarrito.append(imgCarrito, badge);
}

function calcularProductos() {
    let total = 0;
    carrito.forEach( (producto) => {
        total += producto.cantidad;
    });
    return total;
}

function calcularTotal() {
    let total = 0;
    carrito.forEach( producto => {
        total += (producto.precio * producto.cantidad);
    });
    const texto = document.getElementById("total");
    texto.textContent = `Total a pagar: ${total}`
}

export function  eliminarCarrito(nombre){
    console.log(nombre)
    const infoProduct = buscarCarritoNombre(nombre)
    carrito = carrito.filter(object => {
        if (object.id === infoProduct.id) {
            object.cantidad = 0;
        }
        return object.id !== infoProduct.id;
    });
    console.log(carrito)
    localStorage.setItem('carrito', JSON.stringify(carrito));
    carrito = JSON.parse(localStorage.getItem('carrito'));
    RenderCarrito();
    calcularTotal();
}

export function restarProducto(nombre) {
    const infoProduct = buscarCarritoNombre(nombre);
    if(infoProduct === null) {
        return;
    }
    infoProduct.cantidad--;
    if(infoProduct.cantidad === 0) {
        eliminarCarrito(nombre);
    }
    localStorage.setItem('carrito', JSON.stringify(carrito));
    carrito = JSON.parse(localStorage.getItem('carrito'));
    RenderCarrito();
    calcularTotal();
}

export function sumarProducto(nombre) {
    const infoProduct = buscarCarritoNombre(nombre)
    if(infoProduct === null) {
        return;
    }
    infoProduct.cantidad++;  
    localStorage.setItem('carrito', JSON.stringify(carrito));
    carrito = JSON.parse(localStorage.getItem('carrito'));  
    RenderCarrito();
    calcularTotal();
}

export function agregarProducto(producto) {
    const infoProduct = buscarCarritoNombre(producto.nombre)
    if(infoProduct === null || infoProduct === undefined) {        
        producto.cantidad = 1;
        carrito.push(producto);
    }
    else {
        producto.cantidad++;
        const index = carrito.findIndex(item => item.nombre === producto.nombre);
        carrito[index] = producto;
    }
    console.log(`carrito al agregar: ${JSON.stringify(carrito, null, 2)}`)
    localStorage.setItem('carrito', JSON.stringify(carrito));
    RenderCarrito();
    calcularTotal();
}

mainContainerTarjetas.addEventListener('click', e => {
    if(e.target.classList.contains('btn-Eliminar') ){
        const productoTarjeta = e.target.parentElement.parentElement.parentElement;
        eliminarCarrito(productoTarjeta.querySelector('.NombreTarjeta').textContent);
    }
});

mainContainerTarjetas.addEventListener('click', e => {
    if(e.target.classList.contains('btn-Restar') ){
        const productoTarjeta = e.target.parentElement.parentElement.parentElement.parentElement;
        restarProducto(productoTarjeta.querySelector('.NombreTarjeta').textContent)
    }
})

mainContainerTarjetas.addEventListener('click', e => {
    if(e.target.classList.contains('btn-Añadir') ){
        const productoTarjeta = e.target.parentElement.parentElement.parentElement.parentElement;
        sumarProducto(productoTarjeta.querySelector('.NombreTarjeta').textContent)
    }
})

//Función para buscar elementos del carrito
function buscarCarritoNombre(nombreCarrito){
    var result = carrito.find(item => item.nombre === nombreCarrito);
    return result;
}

//Funcion para saber si un elemento existe dentro del objeto de java carrito
function existeCarritoNombre(nombreCarrito){
    const existenciaCarrito = carrito.some(item => item.nombre === nombreCarrito);
    return (existenciaCarrito)? true : false; 
    
}


//Función principal para la creación y renderización del carrito. 
const RenderCarrito = () => {
    mainContainerTarjetas.innerHTML = '';
    if(carrito.length === 0) {
        console.log('entro')
        const mainContainer = document.createElement('DIV');
        mainContainer.innerHTML = `
        <div>
            <img src="../assets/images/empty_cart.png" alt="Carrito vacío" class="empty-cart">
            <h3>No tienes productos en tu <br/> carrito de compras</h4>
        </div>
        `;
        mainContainerTarjetas.appendChild(mainContainer);
        contadorCarrito()
        return
    }
    else {
        carrito.forEach(compra => {
            const mainContainer = document.createElement('DIV');
            mainContainer.setAttribute('class', 'row p-2 bg rounded itemComp align-items-center');
            
            const imagenContainer = document.createElement('DIV');
            imagenContainer.setAttribute('class', 'col-md-3 mt-1');
            mainContainer.appendChild(imagenContainer);
            
            const imagenProduct = document.createElement('IMG');
            imagenProduct.setAttribute('class', 'img-fluid img-responsive rounded product-image');
            imagenProduct.setAttribute('src', compra.url);
            imagenContainer.appendChild(imagenProduct);
            
            const dataContainer = document.createElement('DIV');
            dataContainer.setAttribute('class', 'col-md-6 mt-1 row informacion');
            mainContainer.appendChild(dataContainer);
            
            const titulo = document.createElement('H5');
            titulo.setAttribute('class', 'd-flex justify-content-start NombreTarjeta');
            dataContainer.appendChild(titulo);
            titulo.textContent = compra.nombre;
            
            // const node_7 = document.createElement('DIV');
            // node_7.setAttribute('class', ' d-flex justify-content-start mt-1 mb-1 spec-1');
            // dataContainer.appendChild(node_7);
            
            // const node_8 = document.createElement('SPAN');
            // node_7.appendChild(node_8);
            
            // const node_9 = document.createTextNode((new String("Diseño Unico")));
            // node_8.appendChild(node_9);
            
            // const punto1 = document.createElement('SPAN');
            // punto1.setAttribute('class', 'dot');
            // node_7.appendChild(punto1);
            
            // const node_11 = document.createElement('SPAN');
            // node_7.appendChild(node_11);
            
            // const node_12 = document.createTextNode((new String("Casa")));
            // node_11.appendChild(node_12);
            
            // const punto2 = document.createElement('SPAN');
            // punto2.setAttribute('class', 'dot');
            // node_7.appendChild(punto2);
            
            // const node_14 = document.createElement('SPAN');
            // node_7.appendChild(node_14);
            
            // const node_15 = document.createTextNode((new String("Oficina")));
            // node_14.appendChild(node_15);
            
            const descripcionGeneral = document.createElement('P');
            descripcionGeneral.setAttribute('class', 'justify-content-start text-justify para mb-0');
            descripcionGeneral.textContent = compra.descripcion;
            dataContainer.appendChild(descripcionGeneral);
            
            // const divisionContainer = document.createElement('DIV');
            // divisionContainer.setAttribute('class', 'd-flex justify-content-end col-md-1');
            // divisionContainer.setAttribute('style', 'height: 200px; width: 25px;');
            // mainContainer.appendChild(divisionContainer);
            
            // const barraDivisora = document.createElement('DIV');
            // barraDivisora.setAttribute('class', 'vr');
            // barraDivisora.setAttribute('style', 'width: .3rem;');
            // divisionContainer.appendChild(barraDivisora);
            
            const containerDerecho = document.createElement('DIV');
            containerDerecho.setAttribute('class', 'align-items-center align-content-center col-md-3 border-left mt-1 row');
            mainContainer.appendChild(containerDerecho);
            
            const containerMoney = document.createElement('DIV');
            containerMoney.setAttribute('class', 'd-flex flex-row justify-content-center');
            containerDerecho.appendChild(containerMoney);
            
            const precio = document.createElement('h2');
            precio.setAttribute('class', 'mr-1 precioProducto');
            precio.textContent = "$"+compra.precio*compra.cantidad;
            containerMoney.appendChild(precio);
            
            
            const envioH6 = document.createElement('H6');
            envioH6.setAttribute('class', 'text-success');
            envioH6.textContent = "Cantidad: "+compra.cantidad;
            containerDerecho.appendChild(envioH6);
            
            
            const buttonsContainer = document.createElement('DIV');
            buttonsContainer.setAttribute('class', 'd-flex flex-column mt-4');
            containerDerecho.appendChild(buttonsContainer);
            
            const buttonBorrar = document.createElement('BUTTON');
            buttonBorrar.setAttribute('class', 'botonTarjeta btn-sm btn-Eliminar');
            buttonBorrar.setAttribute('type', 'button');
            buttonBorrar.textContent = "Eliminar producto"
            buttonsContainer.appendChild(buttonBorrar);
            
            
            const buttonsContainer2 = document.createElement('DIV');
            buttonsContainer2.setAttribute('class', 'row justify-content-around');
            buttonsContainer.appendChild(buttonsContainer2);
            
            const buttonAñadir = document.createElement('BUTTON');
            buttonAñadir.setAttribute('class', 'botonTarjeta col-5 mt-2 btn-Añadir');
            buttonAñadir.setAttribute('type', 'button');
            buttonAñadir.textContent = "Añadir";
            buttonAñadir.addEventListener = "";
            buttonsContainer2.appendChild(buttonAñadir);
            
            const buttonRestar = document.createElement('BUTTON');
            buttonRestar.setAttribute('class', 'botonTarjeta col-5 mt-2 btn-Restar');
            buttonRestar.setAttribute('type', 'button');
            buttonRestar.textContent = "Remover",
            buttonsContainer2.appendChild(buttonRestar);
    
            mainContainerTarjetas.appendChild(mainContainer);
    
        });
    }
    contadorCarrito()
}
// renderTotal()
RenderCarrito();
contadorCarrito();
calcularTotal();

