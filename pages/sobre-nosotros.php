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
  <link rel="stylesheet" href="../styles/sobre-nosotros.css">
  <link rel="stylesheet" href="../styles/Navbar.css">
  

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Montserrat:wght@500&display=swap"
    rel="stylesheet">
  <title>Sobre_nosotros</title>
</head>

<body> <!-- Inicia Navbar -->
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
            <a class="nav-link" href="./pages/CarritoDeCompras.php">Carrito de compras</a>
          </li>

          <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link" href="./pages/CarritoDeCompras.php" id="carritoIcon">
              <img src="../assets/icons/iconoCarrito.png" id="iconoCarrito" alt="iconoCarrito">
            </a>
          </li>
          </li>
          <li class="nav-item dropdown" id="Usuario-Estatus">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Iniciar sesión
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="./pages/login.php">Ingresa a tu cuenta</a></li>

              <li>
                <a class="dropdown-item" href="./pages/signup.php">Regístrate</a>
              </li>

            </ul>
          </li>

      </div>
    </div>
  </nav>
  <!--fin del navbar-->

   <!--header -->
   <div class="fondo d-flex justify-content-center align-items-center">
    <div class="col text-center">
      <div id="header">Sobre Nosotros
        <p id="subtext">Descubre qué hay detrás de la magia en tu jardín, conoce más acerca de Plantas Reyes</p>
      </div>
    </div>
  </div>
     <!--fin del header-->
      
      <!-- Encabezado 
<div id="sobreNosotros">
  <div class="misionVision d-flex justify-content-md-center" >
      <div class="border border-0 text-center"><br>
        <h1><b>Sobre Nosotros</b>
        </h1><br>
      </div>
    </div>
  </div>
</div>

  Final de Encabezado -->
  <!-- Inicio Mision y Vision -->
  <br><br>
  <div class="misionVision d-flex justify-content-md-center">
    <div class="card mb-3 border-0" style="max-width: 1500px;">
      <div class="row g-0">
        <div class="contenedor-texto d-flex align-items-center col-md-8">
          <div class="card-body">
            <h1 class="titles card-title text-center">¿Quiénes somos?</h1>
            <h5 class="card-text text-center" id="parrafo">Plantas Reyes es un vivero ubicado en Cuajimalpa de Morelos que cuenta con 12 años en el mercado de horticultores y ofrece a sus clientes una amplia selección de plantas, flores y herramientas de jardinería de alta calidad. 
            </h5>
          </div>
        </div>
        <div class="col-md-4 ">
          <img src="../assets/images/invernadero.jpg" class="img-fluid rounded-end"
            alt="Imagen regando las plantas en una ventana">
        </div>
      </div>
    </div>
  </div>
  </div>
    
  <br><br>
  <div class="misionVision d-flex justify-content-md-center">
    <div class="card mb-3 border-0" style="max-width: 1500px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../assets/images/Plantita .jpg" class="img-fluid rounded-start"
            alt="Imagen regando las plantas en una ventana">
        </div>
        <div class="contenedor-texto d-flex align-items-center col-md-8">
          <div class="card-body">
            <h1 class="titles card-title text-center">Misión</h1>
            <h5 class="card-text text-center" id="parrafo">Ofrecer a nuestros clientes una amplia selección de plantas y
              flores de
              alta calidad, brindando una experiencia de compra en línea conveniente y satisfactoria.</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
<br><br>
  <div class="misionVision d-flex justify-content-md-center">
    <div class="card mb-3 border-0" style="max-width: 1500px;">
      <div class="row g-0">
        <div class="contenedor-texto d-flex align-items-center col-md-8">
          <div class="card-body">
            <h1 class="titles card-title text-center">Visión</h1>
            <h5 class="card-text text-center" id="parrafo">Ser la tienda líder en el mercado de plantas y flores,
              reconocida por
              nuestra calidad excepcional, variedad de productos y excelente servicio al cliente. Aspiramos a ser la
              primera opción para aquellos que buscan embellecer su hogar u oficina con plantas naturales,
              proporcionando una experiencia de compra única y memorable.</h5>
          </div>
        </div>
        <div class="col-md-4">
          <img src="../assets/images/Plantita 2.jpg" class="img-fluid rounded-end"
            alt="Imagen regando las plantas en una ventana">
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Final Mision y Vision -->

  <!-- Inicio Valores -->
  <div class="container">
      <div class="col-12  text-center" id="titulos">
        <h1 id="valuesTitle">Valores </h1>
      </div>
  </div>

  <!-- FLIPING CARDS -->
 
<div class="row mx-1 cards-grid">
  <div class="col">
    <div class="container" id="valuesContainer">
      <div class="card" id="valuesCard">
        <div class="front" style="background-image: url(/assets/images/Imagen\ Transpariencia.png);"></div>
        <div class="back">
          <p id="texto">Nos comprometemos a ser abiertos y directos en todas nuestras actividades,
            brindando a nuestros clientes información clara y precisa sobre nuestros procesos, abastecimiento,
            precios y la calidad de nuestros productos</p>
        </div>
      </div> 
      <h1 id="titulos" style="padding: 1rem;">Transparencia</h1>
    </div>
  </div>

  <div class="col">
    <div class="container" id="valuesContainer">
      <div class="card" id="valuesCard">
        <div class="front" style="background-image: url(https://media.istockphoto.com/id/1254709312/photo/green-business-meeting-united-partners-team-with-hands-together-holding-plant-green-trusted.jpg?s=612x612&w=0&k=20&c=PvuDbzmZDa21J5muok2Dn1uHlBzDfwFBL3xfpg53QQA=);"></div>
        <div class="back">
          <p id="texto">Crear un entorno de respeto y confianza con nuestros clientes para de esta
            forma garantizar un servicio de calidad y claridad donde exista la confianza de compartirnos su
            experiencia y sugerencias.</p>
        </div>
      </div> 
      <h1 id="titulos" style="padding: 1rem;">Integridad</h1>
    </div>
  </div>

  <div class="col">
    <div class="container" id="valuesContainer">
      <div class="card" id="valuesCard">
        <div class="front" style="background-image: url(https://media.gettyimages.com/id/157428172/es/foto/bajo-techo-en-el-jard%C3%ADn-de-hierbas-planta-flor-ollas-por-alf%C3%A9izar.jpg?s=612x612&w=gi&k=20&c=vGIC8s1d1SaY2RlOrT3zu5fmxPyCnWoetkO3RoUwUA4=);"></div>
        <div class="back">
          <p id="texto">Crear un entorno de respeto y confianza con nuestros clientes para de esta
            forma garantizar un servicio de calidad y claridad donde exista la confianza de compartirnos su
            experiencia y sugerencias.</p>
        </div>
      </div> 
      <h1 id="titulos" style="padding: 1rem;">Variedad y Selección</h1>
    </div>
  </div>

  <div class="col">
    <div class="container" id="valuesContainer">
      <div class="card" id="valuesCard">
        <div class="front" style="background-image: url(https://media.istockphoto.com/id/1010894426/photo/concept-for-differentiate-from-other-leader-or-unique.jpg?s=1024x1024&w=is&k=20&c=0nt3kNm71heaDDhCCQBjV4lhOr8hWtaGwsKeCxvDfDY=);"></div>
        <div class="back">
          <p id="texto">Nos comprometemos a ofrecer productos de la más alta calidad a nuestros
            clientes. Seleccionamos cuidadosamente nuestras plantas y flores para garantizar su frescura y belleza,
            asegurando la satisfacción de nuestros clientes en cada compra.</p>
        </div>
      </div> 
      <h1 id="titulos" style="padding: 1rem;">Calidad</h1>
    </div>
  </div>

  <div class="col">
    <div class="container" id="valuesContainer">
      <div class="card" id="valuesCard">
        <div class="front" style="background-image: url(https://media.istockphoto.com/id/1339902346/photo/a-young-african-american-family-sitting-on-the-couch-at-home-while-using-tablet.jpg?s=612x612&w=is&k=20&c=PggFii1U3Nhdyg3uaujAdhcZ5e2z3gPLXHa6w2O7Djc=);"></div>
        <div class="back">
          <p id="texto">Creemos en el poder de las plantas para inspirar y mejorar nuestras vidas.
            Nos esforzamos por brindar a nuestros clientes información y recursos educativos que les permitan
            disfrutar y cuidar de sus plantas de manera óptima.</p>
        </div>
      </div> 
      <h1 id="titulos" style="padding: 1rem;">Inspiración y educación</h1>
    </div>
  </div>

  <div class="col">
    <div class="container" id="valuesContainer">
      <div class="card" id="valuesCard">
        <div class="front" style="background-image: url(https://media.istockphoto.com/id/1317277176/photo/smiling-young-asian-couple-the-owners-of-small-business-flower-shop-discussing-over-laptop-on.jpg?s=612x612&w=0&k=20&c=9Yc2QZvt4AtDnc4-_syX_2ZsChb7ZuhQNkatqgn-jHM=);"></div>
        <div class="back">
          <p id="texto">Nos preocupamos por el medio ambiente y nos esforzamos por promover
            prácticas sostenibles en toda nuestra cadena de suministro. Trabajamos con proveedores comprometidos con
            la conservación de la naturaleza y la protección de los recursos naturales</p>
        </div>
      </div> 
      <h1 id="titulos" style="padding: 1rem;">Sostenibilidad</h1>
    </div>
  </div>
<!-- END FLIPPING CARDS -->

</div>
</div>
<br><br><br>

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

  <script src="../js/carritoSpan.js" type="module"></script>
  <script src="../js/UserStatus.js"></script>
  </body>

  <!--___________________________________________FIN PIE DE PAGINA___________________________________________-->


</html>