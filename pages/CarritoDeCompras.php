<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrito de Compras</title>
 
  <link rel="stylesheet" href="../styles/CarritoDeCompras.css">
  <link rel="stylesheet" href="../styles/Navbar.css">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Montserrat:wght@500&display=swap"
  rel="stylesheet">
  <script src="/js/CarritoCompras2.js" async defer type="module"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
<!-- Inicia Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <img class="rounded-circle" src="../assets/images/logoNavbar.png" width="60rem" alt="Plantas Reyes" />
    <a class="title" href="/index.php">
      <h4>PLANTAS REYES</h4>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse font-navbar" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./sobre-nosotros.php">Sobre nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./catalogo.php">Catálogo de productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./pAM.php">Proyectos a medida</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contactanos.php">Contáctanos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/pages/CarritoDeCompras.php">Carrito de compras</a>
        </li>

        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" href="/pages/CarritoDeCompras.php" id="carritoIcon">
            <img src="../assets/icons/iconoCarrito.png" id="iconoCarrito" alt="iconoCarrito">
          </a>
        </li>
        </li>
        <li class="nav-item dropdown" id="Usuario-Estatus">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Iniciar sesión
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../pages/login.php">Ingresa a tu cuenta</a></li>

            <li>
              <a class="dropdown-item" href="../pages/signup.php">Regístrate</a>
            </li>

          </ul>
        </li>

    </div>
  </div>
</nav>
<!--fin del navbar-->


  <!-- HEADER CARRITO-->
  <div class="container-fluid text-center" id="tituloCompra">
    <div class="col-12  text-center" id="titulos">
      <h1 id="valuesTitle">Carrito de Compras </h1>
    </div>
</div>
<!-- FIN HEADER CARRITO -->
  <div class="container-fluid text-center secundario ">
    <div class="row align-items-center items-secundario">



      <div class="container " id="fondo">
        <div class="d-flex justify-content-center row">
          <div class="col-md-10" id="elementosCarritos">

            <div class="row p-2 bg border rounded itemComp align-items-center">

              <!-- Imagen de la Tarjeta 
                    <div class="col-md-3 mt-1">
                      <img class="img-fluid img-responsive rounded product-image" src="https://como-plantar.com/wp-content/uploads/2021/09/cultivar-y-cuidar-cactus-oreja-de-conejo.jpg.webp">
                    </div>-->

              <!-- Nombre y Descripción del propducto 
                    <div class="col-md-6 mt-1 row informacion">
                      
                        <h5 class="d-flex justify-content-start NombreTarjeta">Cactus mini</h5>
                        <div class=" d-flex justify-content-start mt-1 mb-1 spec-1"><span>Diseño Unico</span><span class="dot"></span><span>Casa</span><span class="dot"></span><span>Oficina<br></span></div>
                        <p class="justify-content-start text-justify para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                    </div>
                      -->

              <!-- Elemntos de precio y botones 
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1 row">

                          <div class="d-flex flex-row justify-content-center">
                              <h1 class="mr-1 precioProducto">$13.99</h1>
                          </div>
                          <h6 class="text-success">Free shipping</h6>
                          <div class="d-flex flex-column mt-4">
                            <button class="btn btn-primary btn-sm" type="button">Borrar</button>
                            <div class="row justify-content-around">
                              <button class="btn  btn-primary btn-sm col-5 mt-2" type="button">Añadir</button>
                              <button class="btn  btn-primary btn-sm col-5 mt-2" type="button">Restar</button>
                            </div>
                         
                        </div>
                    </div>-->

            </div>


          </div>
          <div class="d-flex flex-row d-flex justify-content-end col-md-10">

            <p id="total">Total a pagar: </p>
          </div>
          <hr>
          <div class="d-flex flex-row d-flex justify-content-end col-md-10">

            <button type="button" class="botonTarjeta btn-lg " id="compra"
              onclick="window.location.href = './payment.php';" style="font-size: 1.5rem;">Comprar</button>

          </div>

        </div>

      </div>





    </div>
    <script src="/js/carritoSpan.js" type="module"></script>
    <!--___________________________________________FIN PIE DE PAGINA___________________________________________-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
    <script src="/js/carritoSpan.js" type="module"></script>
    <script src="/js/UserStatus.js"></script>

</body>

</html>