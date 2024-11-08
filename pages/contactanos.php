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
 
  <script src="../js/contacto.js" async defer></script>
  <title>contactanos</title>
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

  <!--contenedores-->
  <div class="misionVision d-flex justify-content-md-center divPrincipal" >
    <div class="col-md-12">
      <div class="border border-0 text-center"><br>
        <h1 id="titulo"><b>CONTÁCTANOS</b>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row" id="fondocuestionario">
      <div class="col-lg-9 col-xl-12 mx-auto">
        <div class="card flex-row my-5 overflow-hidden" id="idContenedorPrincipal">

          <div class="card-img-left d-none d-md-flex ">

            <img src="https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/Palma-Areca-Gd.jpg?fit=1080%2C1080&ssl=1"
              class="img-thumbnail" alt="...">
            <div class="vr"></div>
          </div>

          <div class="card-body p-4 p-sm-5">
            <h1 id="Registrate_titulo">PLANTAS REYES</h1>
            <h5 id="plantasReyes1" style="text-align: left;">Datos de contacto:</h5>
            <h5 class="texto" id="telefono" style="text-align: left;">Telefono:5583xxxxxx</h5>
            <h5 class="texto" id="correo" style="text-align: left;">Correo:administracion@plantasreyes.com </h5>
            <h5 class="texto" id="direccion" style="text-align: left;">Direccion: Sauce 6, san jose de los cedros. cuajimalpa
              de morelos C.P: 05200 CDMX.</h5>
              <br>
            <h5 class="card-title text-center mb-5 fw-light " id="Registrate_titulo">¿Quieres mandarnos comentarios?</h5>
            <form>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" required
                  autofocus>
                <label for="floatingInputUsername">Nombre </label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com" required
                  autofocus>
                <label for="floatingInputEmail">Correo</label>
              </div>


              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputComentarios" placeholder="myComents" required
                  autofocus>
                <label for="floatingInputComentarios">Comentarios </label>
              </div>



              <div class="d-grid mb-2">
                <div class="row">
                  <button type="button" class="btn btn-primary col-5" data-bs-toggle="modal" id="buttonModal"
                    data-bs-target="#staticBackdrop"> Enviar
                  </button>


                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--modal-->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="mensajeModal">Mensaje Enviado</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body justify-content-center" id="modalBody">
          ¡Tu mensaje fue enviado! <br>
          Pronto nos contactaremos contigo.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>


  <!--DIV ICONOS DE REDES SOCIALES
  <div id="footer" class="container-fluid">
    <div class="row p-5">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <img src="../assets/icons/Plantas_reyes_LOGOS-09.png" alt="PlantasReyes" width="100rem" height="100rem">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <a href="/pages/sobre-nosotros.php"><p>Nosotros</p></a>
        <a href="/pages/contactanos.php"><p>Contacto</p></a>
        <img src="../assets/icons/facebook.png" alt="facebook" id="iconos-redes">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <p>Términos y condiciones</p>
        <p>Preguntas frecuentes</p>
        <img src="../assets/icons/instagram.png" alt="instagram" id="iconos-redes">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <p>Aviso de privacidad</p>
        <p>Envíos, pagos y devoluciones</p>
        <img src="../assets/icons/github.png" alt="github" id="iconos-redes">
      </div>
    </div>
  </div>-->





  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
    <script src="../js/carritoSpan.js" type="module"></script>
    <script src="../js/UserStatus.js"></script>
</body>

</html>