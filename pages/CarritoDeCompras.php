<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Style+Script&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../styles/contactanos.css">
  <link rel="stylesheet" href="../styles/Navbar.css">

  <script src="../js/CarritoCompras2.js" async defer type="module"></script>
  <!-- <script src="../js/contacto.js" async defer></script> -->
  <title>Carrito de Compras</title>
</head>

<body>
  <!-- Inicia Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <img class="rounded-circle" src="../assets/images/logoNavbar.png" width="60rem" alt="Plantas Reyes" />
      <a class="title" href="../index.php">
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
            <a class="nav-link" href="./CarritoDeCompras.php">Carrito de compras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./CarritoDeCompras.php" id="carritoIcon">
              <img src="../assets/icons/iconoCarrito.png" id="iconoCarrito" alt="iconoCarrito">
            </a>
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
          <hr>
          <div id="recommended-products">
            <h3>Productos que podrían interesarte</h3>
            <div class="image-container"></div>
            <script src="../js/recommendedProducts.js" async defer type="module"></script>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Inicio Pie de página -->
  <div id="footer" class="container-fluid" style="margin-top: 0; background-color: #587742; color: #ffffff; padding: 20px;">
    <div class="row">
      <!-- Columna con el mensaje grande -->
      <div class="col-12 text-center">
        <h2 style="font-size: 2rem; margin-bottom: 20px;">¡Gracias por confiar en nosotros!</h2>
      </div>

      <!-- Columna izquierda con telefono -->
      <div class="col-md-4 text-left">
        <p style="font-size: 1.2rem; margin-bottom: 5px; color: #223b10;"><i class="bi bi-telephone-fill"></i> Teléfono: 55 5275 0932</p>
        <p style="font-size: 1.2rem; margin-bottom: 5px;">
          <a href="../pages/sobre-nosotros.php" style="text-decoration: none; color: #223b10;"><i class="bi bi-info-circle-fill"></i> Sobre Nosotros</a>
        </p>
      </div>

      <!-- Columna central con redes sociales -->
      <div class="col-md-4 text-center">
        <p style="font-size: 1.2rem; margin-bottom: 5px; color: #223b10;">Síguenos en:</p>
        <a href="https://www.facebook.com/p/Plantas-Reyes-100088890480708/?locale=es_LA" target="_blank" style="margin-right: 10px; color: #8FBC8F;">
          <img src="https://img.icons8.com/?size=100&id=59780&format=png&color=000000" alt="Facebook" width="35px" height="35px">

        </a>

        <a href="https://www.instagram.com/ernestogabrielreyesmaulen?igsh=MTFibW1vZnU4dWozbw==" target="_blank" style="margin-right: 10px; color: #8FBC8F;">
          <img src="https://img.icons8.com/?size=100&id=85140&format=png&color=000000" alt="Instagram" width="40px" height="40px">
        </a>
      </div>

      <!-- Columna derecha con correo -->
      <div class="col-md-4 text-right">
        <p style="font-size: 1.2rem; margin-bottom: 5px; color:#223b10; "><i class="bi bi-correo"></i> Correo: martinreyese27@gmail.com</p>
      </div>
    </div>
    <!-- Fin Pie de página -->

    <script src="../js/carritoSpan.js" type="module"></script>
    <!--___________________________________________FIN PIE DE PAGINA___________________________________________-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
    <script src="../js/carritoSpan.js" type="module"></script>
    <script src="../js/UserStatus.js"></script>

</body>

</html>