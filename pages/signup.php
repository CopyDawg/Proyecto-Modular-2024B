<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Style+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/login-signup.css">
    <link rel="stylesheet" href="../styles/navbar.css">
  
    <title>Registro</title>
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

  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-xl-12 mx-auto">
        <div class="card flex-row my-5 overflow-hidden" id="idContenedorPrincipal">
          <div class="card-img-left d-none d-md-flex ">
              <!-- Background image for card set in CSS! -->
              <div class="vr" ></div>
          </div>

        <!-- Inicia formulario -->
        
          <div class="card-body p-4 p-sm-5">
            <h5 class="titulos card-title text-center mb-5 fw-light " id="Registrate_titulo">Registrarse</h5>
            <form method="post" id="signUp" novalidate>
              <div class="row mb-3">
                <div class="form-floating col-6">
                    <input type="username" name="name" class="form-control" id="floatingName" placeholder="Name" required>
                    <label for="floatingName" id="text_label_Nom_Ape">Nombre</label>
                </div>
                <div class="form-floating col-6">
                    <input type="username" name="last_name" class="form-control" id="floatingLastName" placeholder="LastName" required>
                    <label for="floatingLastName" id="text_label_Nom_Ape">Apellido</label>
                </div>
              </div>

              <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control"  id="floatingInputEmail" placeholder="name@example.com" required>
                  <label for="floatingInputEmail">Correo electronico</label>
              </div> 

              <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control"  id="floatingInputEmailConfirm" placeholder="name@example.com" required>
                  <label for="floatingInputEmailConfirm">Confirmar correo electronico</label>
              </div>

              <div class="form-floating mb-3">
                  <input type="username" name="username" class="form-control" id="floatingUserName" placeholder="Nombre de usuario" required>
                  <label for="floatingUserName">Nombre de usuario</label>
              </div>
                  
              <div class="form-floating mb-3">
                  <input type="tel" name="telephone" class="form-control"  id="floatingInputCel" placeholder="Número de teléfono" required>
                  <label for="floatingInputCel">Número telefónico</label>
                  <p class="description">A 10 dígitos</p>
              </div>

              <div class="form-floating mb-3">
                  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password"required>
                  <label for="floatingPassword">Contraseña</label>
                  <p class="description">Mínimo 8 caracteres: al menos un número, un símbolo, una mayúscula y una minúscula</p>
              </div>

              <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password" required>
                  <label for="floatingPasswordConfirm">Confirmar contraseña</label>
              </div>
                  
                  <!-- alert -->
              <div id="liveAlertPlaceholder"></div>

              <div class="d-grid mb-2">
                  <div class="row">
                      <button class="btn btn-primary btn-login fw-bold text-uppercase col-5" type="reset" id="mainButtonCancel">Cancelar</button>
                      <button class="btn btn-primary btn-login fw-bold text-uppercase col-5" type="submit" id="mainButton">Crear Cuenta</button>
                  </div>
              </div>
              <!--Link al Log In-->
              <a class="d-block text-center mt-2 small text-decoration-none" a href="./login.php">¿Ya tienes una cuenta? Inicia sesión</a> 
              <hr class="my-4">

              <!-- <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                  <i class="fab fa-google me-2"></i> Sign up with Google
                  </button>
              </div>
  
              <div class="d-grid">
                  <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Sign up with Facebook
                  </button>
              </div> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--___________________________________________INICIO PIE DE PAGINA___________________________________________
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
        <p>Terminos y condiciones</p>
        <p>Preguntas frecuentes</p>
        <img src="../assets/icons/instagram.png" alt="instagram" id="iconos-redes">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <p>Aviso de privacidad</p>
        <p>Envios, pagos y devoluciones</p>
        <img src="../assets/icons/github.png" alt="github" id="iconos-redes">
      </div>
    </div>
  </div>-->
<!--___________________________________________FIN PIE DE PAGINA___________________________________________-->  

  <!-- Scripts -->
  <script src="../js/signup.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <script src="/js/UserStatus.js"></script>
  <script src="/js/carritoSpan.js" type="module"></script>
</body>
</html>