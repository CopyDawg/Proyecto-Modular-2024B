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
  <link rel="stylesheet" href="/styles/producto.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Montserrat:wght@500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/styles/index.css">
    <script src="/src/tarjeta_producto.js" async defer></script>
  <title>Macetas</title>
</head>

<body>
  
  <nav id="navbar" class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <div class="logo">
        <a class="navbar-brand" href="/index.php">
          <img src="/assets/icons/Plantas_reyes_LOGOS-09.png" alt="PlantasReyes" width="30" height="24">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./contactanos.php">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./sobre-nosotros.php">Acerca De Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./pAM.php">Proyecto A La Medida</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./catalogo.php">Catalogo De Productos</a>
          </li>

          <!--menu desplegable-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Iniciar Sesion
            </a>
            <ul id="dropdown" class="dropdown-menu">
              <li><a class="dropdown-item" href="./login.php">Iniciar sesion</a></li>
              <li><a class="dropdown-item" href="./signup.php">registrate</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-cart4" ></i></a>
          </li>

          </div>
        </ul>
      </div>
    </div>
</nav>

  <!-- Inicio del encabezado -->
  <div class="fondo d-flex justify-content-left align-items-center">
    <h1 id="encabezado"> <b>Macetas</b></h1>
  </div>
  <!-- Final del encabezado -->

  <br> <br> <br>
  
  <!-- Inicio de la tarjeta -->
  <div class="container d-flex container d-flex justify-content-center">
    <div class="card mb-4 border border-0" style="width:1350px;"id="parrafo">


      <div class="row g-0">

        <!-- Inicio del div de la imagen -->
        <div class="col-md-6 col-form-label container d-flex container d-flex justify-content-center" style="height: 600px;">
          <img src="../assets/images/pam Plantas.png" class="img-fluid rounded-start" alt="Maceta" id="imagenMaceta">
        </div>
        <!-- Final del div de la imagen -->

        <!-- Inicio del div del formulario -->
        <div class="col-md-6"id="parrafo">
          <div class="card-body" >
            <h1 class="card-title" id="titulos" ><b>Maceta artesanal</b></h1>
            <br>
            <h5 class="card-text">Selecciona el tamaño:</h5>
            <br>
            <div class="precios"><form>
              <input type="radio" id="chico" name="tamaños" value="chico">
              <label for="java">Chico: 100<div></div></label>
              <br>
              <br>
              <input type="radio" id="mediano" name="tamaños" value="mediano">
              <label for="java">Mediano: 200</label><br>
              <br>
              <input type="radio" id="grande" name="tamaños" value="grande">
              <label for="java">Grande: 300</label><br>
            </form>
            <br>
          </div>
            <div class="cantidad"> 
              <input type="number" id="cantidad" class="input-text qty text" value="1" title="Cantidad" min="1" max="10" name="cantidad" step="1" placeholder="" inputmode="numeric" autocomplete="off"> 
            </div>
            <br>
              <button type="submit" name="añadir-al-carrito" value="Añadir" class="single_add_to_cart_button button alt">Añadir al carrito</button>
            <br>
            <br>
            <h5><b>Descrpion</b></h5>
             <p class="descripcion" id="descripcionProducto"> Aqui va la descripcion del producto, asi que ahi les va un lorem. La Maceta es una planta que se obtiene en Plantas contra Zombis en el Nivel 5-1 del Tejado. Permite al jugador poner plantas en el Tejado, al igual que Nenúfar en niveles de agua. A pesar de que se supone que se usa en el tejado, también se puede plantar en piso regular, pero no en un Nenúfar.</p>
          </div>
        </div>
        <!-- Final del div del formulario -->
      </div>

      
    </div>
  </div>
  <!-- Final de la tarjeta -->
  <script src="/js/carritoSpan.js" type="module"></script>
  <script src="/js/UserStatus.js"></script>
</body>

</html>