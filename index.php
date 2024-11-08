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
  <script src="/js/catalogue-cards.js" type="module" async defer></script>
  <link rel="stylesheet" href="./styles/catalogo.css">
  <link rel="stylesheet" href="./styles/index.css">
 
  <link rel="stylesheet" href="./styles/Navbar.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Montserrat:wght@500&display=swap"
    rel="stylesheet">
  <title>Pagina Principal</title>
</head>

<body>
<?php
// Primero, definimos los datos de conexión a la base de datos
$host = 'localhost';      // La dirección del servidor de la base de datos
$dbname = 'PlantasReyes';    // El nombre de la base de datos
$user = 'postgres';     // El usuario de la base de datos
$password = 'sonic301299'; // La contraseña del usuario

try {
    // Crear una conexión a la base de datos usando PDO (PHP Data Objects)
    $pdo = new PDO("pgsql:host=$host;port=1234;dbname=$dbname", $user, $password);

    // Configuramos PDO para que lance excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Definimos una consulta SQL para obtener los datos necesarios para el combobox
    $sql = "SELECT * FROM categorias"; // Reemplaza 'tabla' por el nombre de la tabla y ajusta los campos según sea necesario

    // Preparamos la consulta SQL
    $stmt = $pdo->prepare($sql);

    // Ejecutamos la consulta
    $stmt->execute();

    // Iniciamos el combobox en HTML
    echo "<select name='mi_combobox'>";

    // Recorremos cada fila del resultado de la consulta
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Por cada fila, creamos una opción en el combobox
        // 'id' se usará como el valor de la opción y 'nombre' como el texto mostrado
        echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
    }

    // Cerramos el combobox
    echo "</select>";

} catch (PDOException $e) {
    // Si ocurre un error en la conexión, mostramos un mensaje
    echo "Error en la conexión: " . $e->getMessage();
}

// Finalmente, cerramos la conexión asignando null a $pdo
$pdo = null;
?>


    <!--Inicio del NavBar-->
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
                <a class="nav-link" href="./pages/sobre-nosotros.php">Sobre nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/catalogo.php">Catálogo de productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/pAM.php">Proyectos a medida</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/contactanos.php">Contáctanos</a>
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
    <!--Fin del NavBar-->

    <!-- Inicio Carrucel de Encabezado -->
    <div class="EncabezadoPI">
        <div class="h-100px;">
            <div id="EncabezadoPP" class="carousel slide" data-bs-ride="carousel">
                <!-- <div class="carousel-indicators">

                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div> -->

                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="./assets/images/carruselPrincipal.jpg" class="d-block w-100" alt="Principal">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 id="titulos">Plantas Reyes</h1>
                            <h5 id="parrafoPI">Descubre un mundo verde de belleza natural en Plantas Reyes. 
                            </h5>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./assets/images/PlPlantas.png" class="d-block w-100" alt="Mantenimiento">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 id="titulos">Plantas y Macetas</h1>
                            <h5 id="parrafoPI">Convierte tu hogar en un oasis de serenidad y frescura con nuestras exquisitas selecciones de plantas y macetas. 
                            </h5>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./assets/images/carruselPrincipal1.jpg" class="d-block w-100" alt="ProyectosAMedida">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 id="titulos">Proyectos a la medida</h1>
                            <h5 id="parrafoPI">Déjate envolver por la belleza de la naturaleza y encuentra inspiración para dar vida a tus espacios en Plantas Reyes.
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"

                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button> -->

      </div>
    </div>
  </div>
  </div>
  <!-- Final Carrucel de Encabezado -->

  <!-- Inicio del Encabezado Tarjetas-->
  <div class="misionVision d-flex justify-content-md-center" id="titulo-encabezado-PI">
    <div class="col-md-12">
      <div class="border border-0 text-center"><br>
        <h1><b>¡Productos destacados!</b>
        </h1><br>
      </div>
    </div>
  </div>
  <br><br><br>
  <!-- Final del Encabezado Tarjetas-->
  <!-- Product cards-->
  <div class="row" id="container-cards">

    <div class="col-sm-12 container text-center">
      <!--<div class="container"></div>-->
    </div>
  </div>
  <!-- Inicio PAM-->
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
  <br>
  <div class="misionVision d-flex justify-content-md-center text-center">
    <div class="col-md-12 ">
      <div class="row " >
        <div class="col rounded">
          <div class="card h-100 shadow" id="cont-t">
            <div class="card-body ">
              <h4 class="card-title" id="titulos">¡Contáctanos!</h4>
              <p class="card-text " id="parrafo">Ya sea que prefieras comunicarte por WhatsApp o correo, estamos aquí
                para atenderte. Puedes agendar una visita a domicilio o recibir asesoría personalizada en línea.
                Estamos disponibles para responder todas tus preguntas y brindarte la orientación que necesitas para
                comenzar tu proyecto.
              </p>
              <a href="./pages/contactanos.php" class="button-pam" id="titulos">Contacto</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow" id="cont-t">
            <img src="./assets/icons/planta.png"
              class="img-fluid rounded-start d-flex container d-flex justify-content-center" alt="plantita" id="icono">
            <div class="card-body">
              <p class="card-text" id="parrafo">Con base en una asesoría en línea o una visita a
                domicilio, crearemos una propuesta personalizada para tu espacio.
                Nuestro equipo de expertos tomará en cuenta tus preferencias, necesidades y estilo para
                diseñar una solución única y adaptada a ti.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow" id="cont-t">
            <img src="./assets/icons/entrega.png"
              class="img-fluid rounded-start d-flex container d-flex justify-content-center" alt="entrega" id="icono">
            <div class="card-body">
              <p class="card-text" id="parrafo">Plantas Reyes se encargará de la instalación en tu hogar.
                Nuestro equipo llevará a cabo la colocación de las plantas, responderá todas tus
                preguntas y dejará tus espacios limpios y listos para disfrutar.
                Nos aseguraremos de que todo esté perfectamente colocado y en armonía con tu entorno.
              </p>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>
  <br><br><br><br><br>
  <!-- Final PAM-->

  <!--inicio footer
  <div id="footer" class="container-fluid">
    <div class="row p-5">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <img src="/assets/icons/Plantas_reyes_LOGOS-09.png" alt="PlantasReyes" width="100rem" height="100rem">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">

        <a href="/pages/sobre-nosotros.php">
          <p>Nosotros</p>
        </a>
        <a href="/pages/contactanos.php">
          <p>Contacto</p>
        </a>
        <img src="/assets/icons/facebook.png" alt="facebook" id="iconos-redes">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">

        <p>Términos y condiciones</p>

        <p>Preguntas frecuentes</p>
        <img src="/assets/icons/instagram.png" alt="instagram" id="iconos-redes">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <p>Aviso de privacidad</p>

        <p>Envios, pagos y devoluciones</p>
        <img src="/assets/icons/github.png" alt="github" id="iconos-redes">
      </div>
    </div>-->
  
  </div>
  <script src="./js/carritoSpan.js" type="module"></script>
  <script src="./js/UserStatus.js"></script>
  <!--___________________________________________FIN PIE DE PAGINA___________________________________________-->
</body>
</html>
