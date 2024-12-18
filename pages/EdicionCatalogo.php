<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion de Catalogo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/Navbar.css">

    <link rel="stylesheet" href="../styles/EdicionCatalogo.css">
    <script src="../js/contacto.js" async defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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
                <a class="nav-link" href="./CarritoDeCompras.php" id="carritoIcon">
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
    <!--FINnavbar-->
<div id="fondoEdicionDeCat">
    <div class="misionVision d-flex justify-content-md-center divPrincipal" >
        <div class="col-md-12">
          <div class="border border-0 text-center" ><br>
            <h1 id="tituloEdicion"><b>Edicion de catalogo</b>
          </div>
        </div>
      </div>
</div>
<br>
    <!--SECCION DE PLANTAS-->
    <div class="conteiner-fluid">
        <p id="categoria">Plantas
            <button id="botonCrear" type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crear</button>
        </p>
    </div>
    <div id="carruselPlantas" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-group">
                    <div class="card">
                        <img src="https://hips.hearstapps.com/hmg-prod/images/garden-croton-or-variegated-croton-euphorbiaceae-news-photo-1670849839.jpg?crop=1xw:1xh;center,top&resize=980:*"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Croto</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://www.elmueble.com/medio/2022/05/17/lilac-anturio_9317cc4d_674x674.jpeg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Anturio</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://thumbs.dreamstime.com/b/flores-violetas-de-saintpaulia-podridas-plantar-en-maceta-y-herramientas-jard%C3%ADn-para-plantas-macetas-tablas-madera-198059583.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Violeta</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                            <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card-group">
                    <div class="card">
                        <img src="https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/Palma-Areca-Gd.jpg?fit=1080%2C1080&ssl=1"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Palma Areka</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://hagearbeider.com/wp-content/uploads/2021/02/1612526530_480_Omsorg-for-den-vakre-cordyline-tango.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Muñeca</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://editorialtelevisa.brightspotcdn.com/dims4/default/03eabb0/2147483647/strip/true/crop/1194x672+3+0/resize/1000x563!/quality/90/?url=https%3A%2F%2Fk2-prod-editorial-televisa.s3.amazonaws.com%2Fbrightspot%2Fwp-content%2Fuploads%2F2022%2F07%2Forquidea.jpg"" class="
                            card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Orquidea</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                            <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carruselPlantas" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carruselPlantas" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>



    <!--SECCION DE MACETAS-->
    <div class="conteiner-fluid">
        <p id="categoria">Macetas
            <button id="botonCrear" type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crear</button>
        </p>
    </div>
    <div id="carouselMacetas" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-group">
                    <div class="card">
                        <img src="https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/Esfera-chica-barro.jpg?resize=300%2C300&ssl=1"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Esfera Barro</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/Taza-chica.jpg?resize=300%2C300&ssl=1"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Taza Barro</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/esfera-grande-fibra.jpg?resize=300%2C300&ssl=1"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Esfera Ceramica</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                            <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card-group">
                    <div class="card">
                        <img src="https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/cubo-grande-fibra.jpg?resize=300%2C300&ssl=1"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cubo Ceramica</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/Jardinera-Barro-1.jpg?resize=300%2C300&ssl=1"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jardinera Barro</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/jardinera-fibra.jpg?resize=600%2C600&ssl=1"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jardinera Fibra de Vidrio</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                            <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMacetas" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMacetas" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>




    <div class="container-fluid p-0">
        <!--SECCION DE PRODUCTOS-->
        <div class="conteiner-fluid">
            <p id="categoria" style="text-align: left;">Productos
                <button id="botonCrear" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crear</button>
            </p>
        </div>
        <div id="caruselProductos" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group">
                        <div class="card">
                            <img src="https://elheraldodemartinez.com.mx/images/Articulos2018/Articulo/2020/011Noviembre/28Nov/PAG-3-PRINCIPAL.png"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Fertilizante Nitrofosca</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://agropos.com.br/wp-content/uploads/2022/03/Fertilizante-Para-Planta.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Fertilizante Florifil</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to
                                    additional
                                    content.</p>
                                <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://m.media-amazon.com/images/I/812q2D0i3sL._AC_UF1000,1000_QL80_.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sistema de Riego</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This card has even longer content than the first to show that
                                    equal
                                    height action.</p>
                                <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-group">
                        <div class="card">
                            <img src="https://as2.ftcdn.net/v2/jpg/02/65/10/51/1000_F_265105182_1kHISR3wzXYeADjOmnhU8lLvd6EyNxuE.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Herramientas de Jardin</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://www.elblogdelatabla.com/wp-content/uploads/2020/11/cinturon-jardineria-herramientas-mano-florista-cuero-merifaLeather.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cinturon de Cuero </h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to
                                    additional
                                    content.</p>
                                <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://plasticforte.com/wp-content/uploads/2022/06/accesorios-jardineria-plasticforte.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Manguera de Riego</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This card has even longer content than the first to show that
                                    equal
                                    height action.</p>
                                <a href="#" id="botonProducto" class="btn btn-primary">Producto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="botonProducto1" class="carousel-control-prev" type="button" data-bs-target="#caruselProductos"
                data-bs-slide="prev">
                <span id="botonProducto1" class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span id="botonProducto1" class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#caruselProductos" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!--FOOTER
    <div id="footer" class="container-fluid footer">
        <div class="row p-5 footer">
            <div class="col-xs-12 col-md-6 col-lg-3 footer">
                <img class="footer" src="../assets/icons/Plantas_reyes_LOGOS-09.png" alt="PlantasReyes" width="100rem"
                    height="100rem">
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3  footer">
                <p class="footer">Nosotros</p>
                <p class="footer">Contacto</p>
                <img class="footer" src="../assets/icons/facebook.png" alt="facebook" id="iconos-redes">
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3 footer">
                <p class="footer">Terminos y condiciones</p>
                <p class="footer">Preguntas frecuentes</p>
                <img class="footer" src="../assets/icons/instagram.png" alt="instagram" id="iconos-redes">
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3 footer">
                <p class="footer">Aviso de privacidad</p>
                <p class="footer">Envios, pagos y devoluciones</p>
                <img class="footer" src="../assets/icons/github.png" alt="github" id="iconos-redes">
            </div>
        </div> -->

    </div>



    <!-- Inicia el modal (Formulario de nuevos productos) -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <!-- Inicia cabeza de modal -->
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Termina cabeza de modal -->

                <!-- Inicia cuerpo de modal -->
                <div class="modal-body conainter-fluid">
                    <form class="needs-validation" id="productForm" novalidate>
                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <div row></div>
                                <div class="col-md-12">
                                    <img src="../assets/images/default-image-create-form.png" class="img-fluid rounded"
                                        alt="Imagen de muestra" id="articleImage">
                                </div>
                                <div class="col-md-12">
                                    <label for="imageForm" id="btn-image">Cargar imagen</label>
                                    <input type="file" name="Imagen" class="form-control" aria-label="file example"
                                        id="imageForm" accept="image/*" required>
                                    <div class="valid-feedback">
                                        ¡Genial!
                                    </div>
                                    <div class="invalid-feedback">
                                        Carga la imagen del artículo
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row justify-content-md-center">
                                    <div class="col-md-12">
                                        <label for="article" class="form-label">Nombre del artículo</label>
                                        <input type="text" class="form-control" name="Artículo" id="article"
                                            placeholder="Artículo" required>
                                        <div class="valid-feedback">
                                            ¡Genial!
                                        </div>
                                        <div class="invalid-feedback">
                                            Es necesario colocar el nombre del artículo
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="articleId" class="form-label">ID del artículo</label>
                                        <input type="number" class="form-control" name="ID" id="articleId" min="0"
                                            placeholder="4321" required>
                                        <div class="valid-feedback">
                                            ¡Genial!
                                        </div>
                                        <div class="invalid-feedback">
                                            Es necesario colocar el ID del artículo
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="articlePrice" class="form-label">Precio</label>
                                        <input type="number" class="form-control" name="Precio" id="articlePrice"
                                            min="0" placeholder="123" step="0.01" required>
                                        <div class="valid-feedback">
                                            ¡Genial!
                                        </div>
                                        <div class="invalid-feedback">
                                            Es necesario colocar el precio del artículo
                                        </div>
                                    </div>
                                    <div class="mb-12">
                                        <label for="articleDescription" class="form-label">Descripción</label>
                                        <textarea class="form-control" id="articleDescription" rows="5"
                                            placeholder="Descripción del producto" name="Descripción"
                                            required></textarea>
                                        <div class="valid-feedback">
                                            ¡Genial!
                                        </div>
                                        <div class="invalid-feedback">
                                            Es necesario colocar la descripción del artículo
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Inicia pie del modal -->
                            <div class="modal-footer justify-content-right">
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" value="Enviar" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Termina pie de modal -->
                        </div>
                    </form>
                </div>
                <!-- Termina cuerpo de modal -->



            </div>
        </div>
        <!-- Termina el modal (Formulario de nuevos productos) -->









        <script src="../js/uploadImage.js"></script>
        <script src="../js/validateData.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>

            <script src="/js/carritoSpan.js" type="module"></script>
            <script src="/js/UserStatus.js"></script>
</body>

</html>