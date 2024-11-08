<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/styles/pAM.css">
  <link rel="stylesheet" href="/styles/Navbar.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Montserrat:wght@500&display=swap"
    rel="stylesheet">
  <title>Proyectos a Medida</title>
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

  <!--Inicio de Proyectos a Medida-->
  <div class="pam">
    <br>
    <div class="misionVision d-flex justify-content-md-center">
      <div class="card mb-3 border-0" style="max-width: 1000px;" id="pam-con">
        <div class="row g-0">
          <div class="col-md-4" id="pam-con">
            <img src="/assets/images/pam Plantas.png" class="img-fluid rounded-start" alt="Imagen PAM">
          </div>
          <div class="col-md-2" id="pam-con"></div>
          <div class="contenedor-texto d-flex align-items-center col-md-6" id="pam-con">
            <div class="card-body">
              <h1 class="titles card-title text-center" id="titulos">Proyectos a medida</h1>
              <br>
              <p class="card-text text-center" id="parrafo-pam">Siéntete mejor en tus espacios
                favoritos rodeado de plantas!
                Con Plantas Reyes, te ofrecemos asesoría especializada y propuestas personalizadas
                para que puedas tener las plantas y macetas adecuadas en tus espacios más queridos.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  </div>
  <!-- Final de Proyectos a Medida-->

  <!-- Inicio de espacios para plantas-->
  <div class="misionVision d-flex justify-content-md-center" id="titulo-encabezado-Pam">
    <div class="col-md-12">
      <div class="border border-0 text-center"><br>
        <h1><b>¿Qué espacios se pueden ver más bonitos con plantas?</b>
        </h1><br>
      </div>
    </div>
  </div>
  <!-- Final de espacios para plantas-->
  <br><br>
  <!-- Inicio imagenes de espacios para plantas-->
  <div class="misionVision d-flex justify-content-md-center">

    <div class="col-12  text-center">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card shadow p-3 mb-5 bg-body rounded" style="height:500px">
              <img src="/assets/images/Plantas oficina.png" class="card-img-top" alt="Plantas" style="height:425px">
              <div class="card-body">
                <h5 class="card-title" id="titulos">Oficina</h5>
              </div>
            </div>
          </div>
          <div class="col ">
            <div class="card shadow p-3 mb-5 bg-body rounded" style="height:500px">
              <img src="/assets/images/PlantasenCasa.png" class="card-img-top" alt="Accesorios" style="height:425px">
              <div class="card-body">
                <h5 class="card-title" id="titulos">Casa</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow p-3 mb-5 bg-body rounded " style="height:500px">
              <img src="/assets/images/negocios-con-plantas.png" class="card-img-top" alt="rip" style="height:425px">
              <div class="card-body">
                <h5 class="card-title" id="titulos">Negocios</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- final imagenes de espacios para plantas-->
  <br>
  <div class="misionVision d-flex justify-content-md-center">
    <div class="col-md-10">
      <div class="rounded-pill text-center " id="titulo-pill"><br>
        <h1>¿Cómo se llevan a cabo los proyectos?
        </h1><br>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="misionVision d-flex justify-content-md-center text-center">
    <div class="col-md-10">
      <div class="row row-cols-1 row-cols-md-4 g-5">
        <div class="col rounded">
          <div class="card h-100 shadow" id="cont-t">
            <div class="card-body ">
              <h4 class="card-title" id="titulos">¡Contactanos!</h4>
              <p class="card-text " id="parrafo">Ya sea que prefieras comunicarte por WhatsApp o correo, estamos aquí
                para atenderte. Puedes agendar una visita a domicilio o recibir asesoría personalizada en línea.
                Estamos disponibles para responder todas tus preguntas y brindarte la orientación que necesitas para
                comenzar tu proyecto.</p>
              <a href="#" class="button-pam" id="titulos">Contacto</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow" id="cont-t">
            <img src="/assets/icons/planta.png"
              class="img-fluid rounded-start d-flex container d-flex justify-content-center" alt="plantita" id="icono">
            <div class="card-body">
              <p class="card-text" id="parrafo">Con base en una asesoría en línea o una visita a domicilio, crearemos
                una propuesta personalizada para tu espacio.
                Nuestro equipo de expertos tomará en cuenta tus preferencias, necesidades y estilo para diseñar una
                solución única y adaptada a ti.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow" id="cont-t">
            <img src="/assets/icons/entrega.png"
              class="img-fluid rounded-start d-flex container d-flex justify-content-center" alt="entrega" id="icono">
            <div class="card-body">
              <p class="card-text" id="parrafo">Plantas Reyes se encargará de la instalación en tu hogar.
                Nuestro equipo llevará a cabo la colocación de las plantas, responderá todas tus preguntas y dejará tus
                espacios limpios y listos para disfrutar.
                Nos aseguraremos de que todo esté perfectamente colocado y en armonía con tu entorno.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow" id="cont-t">
            <img src="/assets/icons/planta (1).png"
              class="img-fluid rounded-start d-flex container d-flex justify-content-center" alt="plantita1" id="icono">
            <div class="card-body">
              <p class="card-text" id="parrafo">Cuando compres tus plantas con Plantas Reyes, recibirás una garantía
                mantenimiento gratuito.
                Queremos asegurarnos de que tus plantas se mantengan saludables y hermosas, brindándote el soporte
                necesario para su cuidado a largo plazo.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <br><br>

  <br><br><br>
  <!-- Final contactanos!-->

  <!--___________________________________________INICIO PIE DE PAGINA___________________________________________
  <div id="footer" class="container-fluid">
    <div class="row p-5">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <img src="/assets/icons/Plantas_reyes_LOGOS-09.png" alt="PlantasReyes" width="100rem" height="100rem">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <a href="/pages/sobre-nosotros.php"><p>Nosotros</p></a>
        <a href="/pages/contactanos.php"><p>Contacto</p></a>
        <img src="/assets/icons/facebook.png" alt="facebook" id="iconos-redes">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <p>Términos y condiciones</p>

        <p>Preguntas frecuentes</p>
        <img src="/assets/icons/instagram.png" alt="instagram" id="iconos-redes">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <p>Aviso de privacidad</p>
        <p>Envíos, pagos y devoluciones</p>

        <img src="/assets/icons/github.png" alt="github" id="iconos-redes">
      </div>
    </div>

  </div>-->

  <!--___________________________________________FIN PIE DE PAGINA___________________________________________-->
  <script src="/js/carritoSpan.js" type="module"></script>
  <script src="/js/UserStatus.js"></script>

</body>

</html>