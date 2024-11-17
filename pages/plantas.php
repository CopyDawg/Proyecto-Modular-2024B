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
 

  <script src="/js/plantas.js" type="module" async defer></script>

    <title>Plantas</title>
</head>
<body>
<!-- Navbar -->
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
            <a class="nav-link" href="./CarritoDeCompras.php">Carrito de compras</a>
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
 <!-- Header -->
<div class="fondo d-flex justify-content-center align-items-center" style="background-color: #576e4c; padding: 20px;">
  <div class="border border-0 text-center" style="margin: 0;">
    <div id="header" style="font-size: 36px; font-weight: bold; color: #ffffff; text-align: center;">
      Catálogo de Plantas
    </div>
  </div>
</div>
<!-- Fin Header -->


<!-- Barra con texto -->
<div class="misionVision d-flex justify-content-md-center" id="titulo-encabezado-PI">
  <div class="col-md-12">
    <div class="border border-0 text-center"><br>
      <div id="barra"><b>¡Disfruta de la increíble variedad que tenemos para ti!</b></div><br>
    </div>
  </div>
</div>
<!-- Fin Barra con texto -->

<!-- Product cards -->
<div class="container my-4">
  <div class="row" id="container-cards">
    <!-- Plant Cards -->
       <!-- Aloe Vera -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1632380211596-b96123618ca8?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Aloe Vera">
        <div class="card-body">
          <h5 class="card-title">Aloe Vera</h5>
          <p class="card-text">Ideal para interiores. Sus propiedades purificadoras mejoran el ambiente.</p>
          <p class="card-text"><strong>Precio: $120 MXN</strong></p>
          <button class="btn btn-success">Añadir al carrito</button>
        </div>
      </div>
    </div>

    <!-- Lavanda -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1565011523534-747a8601f10a?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         class="card-img-top" alt="Lavanda"
         style="width: 355px; height: 450px;">
        <div class="card-body">
          <h5 class="card-title">Lavanda</h5>
          <p class="card-text">Perfecta para exteriores. Su aroma relaja y embellece el jardín.</p>
          <p class="card-text"><strong>Precio: $90 MXN</strong></p>
          <button class="btn btn-success">Añadir al carrito</button>
        </div>
      </div>
    </div>
        <!-- Orquidea -->
        <div class="col-md-4 mb-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1618080578815-335456280012?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         class="card-img-top" alt="Orquidea"
         style="width: 355px; height: 450px;">
        <div class="card-body">
          <h5 class="card-title">Orquídea Phalaenopsis</h5>
          <p class="card-text">Perfecta para embellecer cualquier lugar y darle estilo lujoso.</p>
          <p class="card-text"><strong>Precio: $90 MXN</strong></p>
          <button class="btn btn-success">Añadir al carrito</button>
        </div>
      </div>
    </div>
 <!-- Peonias  -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1507437072862-10c124d3596b?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         class="card-img-top" alt="Peonias"
         style="width: 355px; height: 450px;">
        <div class="card-body">
          <h5 class="card-title">Peonias</h5>
          <p class="card-text">Perfecta para embellecer cualquier lugar y darle estilo lujoso.</p>
          <p class="card-text"><strong>Precio: $90 MXN</strong></p>
    
          <button class="btn btn-success">Añadir al carrito</button>
        </div>
      </div>
    </div>
     <!-- Ficus Lyrata -->
     <div class="col-md-4 mb-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1596547612397-1432a7a7d37d?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         class="card-img-top" alt="Ficus"
         style="width: 355px; height: 450px;">
        <div class="card-body">
          <h5 class="card-title">Ficus Lyrata          </h5>
          <p class="card-text">Perfecta para embellecer cualquier lugar y darle estilo lujoso.</p>
          <p class="card-text"><strong>Precio: $90 MXN</strong></p>
          <button class="btn btn-success">Añadir al carrito</button>
        </div>
      </div>
    </div>

    <!-- Rosas Rojas -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1694735043383-a7c966667e9d?q=80&w=1336&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         class="card-img-top" alt="RojasRosas"
         style="width: 355px; height: 450px;">
        <div class="card-body">
          <h5 class="card-title"> Rosas Rojas  </h5>
          <p class="card-text">Perfecta para embellecer cualquier lugar y darle estilo lujoso.</p>
          <p class="card-text"><strong>Precio: $90 MXN</strong></p>
          <button class="btn btn-success">Añadir al carrito</button>
        </div>
      </div>
    </div>


    <!-- Add more plants as necessary -->
  </div>
</div>


 <!--inicio footer-->
<div id="footer" class="container-fluid">
  <div class="row p-5">
    <!-- Columna con el mensaje grande -->
    <div class="col-12 text-center">
      <h2>¡Gracias por confiar en nosotros!</h2>
    </div>
    <!-- Columna con los detalles de contacto y redes sociales -->
    <div class="col-6 text-left">
      <p style="font-size: 1rem;">Teléfono: 55 5275 0932</p>
    </div>
    <!-- Columna derecha con Facebook -->
    <div class="col-3 text-right">
      <p style="font-size: 1rem;">Facebook: Plantas Reyes</p>
    </div>
  </div>
</div>
<!--final footer-->
<script src="/js/carritoSpan.js" type="module"></script>
<script src="/js/UserStatus.js"></script>
</body>
</html>