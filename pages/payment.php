<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Style+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/payment.css">
    <link rel="stylesheet" href="../styles/navbar.css">
 
    <title>Registro</title>
</head>
<body>
<!-- Inicia Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid" id="navbar-container">
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
            <a class="nav-link" href="/pages/sobre-nosotros.php">Sobre nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/catalogo.php">Catálogo de productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/pAM.php">Proyectos a medida</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/contactanos.php">Contáctanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/CarritoDeCompras.php">Carrito de compras</a>
          </li>
          <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link" href="/pages/CarritoDeCompras.php" id="carritoIcon">
              <img src="../assets/icons/iconoCarrito.png" id="iconoCarrito">
            </a>
          </li>
          </li>
          <li class="nav-item dropdown" id="Usuario-Estatus">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Iniciar sesión
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/pages/login.php">Ingresa a tu cuenta</a></li>

              <li>
                <a class="dropdown-item" href="/pages/signup.php">Regístrate</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--fin del navbar-->

<div class="row justify-content-center">

        <!-- Inicia formulario -->
    <div class="col-8">
        <div class="card-body p-4 p-sm-5">
            <h5 class="titulos card-title text-center mb-5 fw-light " id="Registrate_titulo">Dirección de envío</h5>
            <form id="payment" novalidate>
                <div class="form-floating mb-3">
                    <input type="username" name="Nombre" class="form-control" id="fullName" placeholder="Name" required>
                    <label for="fullName" id="text_label_Nom_Ape">Nombre (Nombre y apellidos)</label>
                </div>

                <div>
                    <select class="form-select" aria-label="Default select example" name="Estado" id="state">
                        <option selected>Estado</option>
                        <option value="1">Ciudad de México</option>
                        <option value="2">Estado de México</option>
                    </select>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Ciudad" class="form-control" id="city" placeholder="Ciudad" required>
                    <label for="city">Ciudad</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Colonia" class="form-control" id="neighborhood" placeholder="Colonia" required>
                    <label for="neighborhood">Colonia</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" name="Código postal" class="form-control"  id="postalCode" placeholder="Código postal" required>
                    <label for="postalCode">Código postal</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input type="text" name="Calle y número" class="form-control" id="streetNumber" placeholder="Calle y número" required>
                    <label for="streetNumber">Calle y número ext. e int.</label>
                </div>
                    
                <div class="form-floating mb-3">
                    <input type="tel" name="Número telefónico" class="form-control"  id="celphone" placeholder="Número telefónico" required>
                    <label for="celphone">Número telefónico</label>
                    <p class="description">A 10 dígitos</p>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Referencias" class="form-control" id="references" placeholder="Referencias" required>
                    <label for="references">Opcional: referencias</label>
                </div>

                    
                    <!-- alert -->
                <div id="liveAlertPlaceholder"></div>

                <div class="d-grid mb-2">
                    <div class="row">
                        <button class="btn btn-primary btn-login fw-bold text-uppercase col-5" type="reset" id="mainButtonCancel">Cancelar</button>
                        <button class="btn btn-primary btn-login fw-bold text-uppercase col-5" type="submit" id="mainButton">Guardar</button>
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
      <!-- fin formulario -->

       <!-- Inicia botón payplay -->
       <div class="col-4 " id="botonPago">
        <!-- Set up a container element for the button -->
          <div id="paypal-button-container" class="border d-flex aligns-items-center justify-content-center"></div>
       </div>
       <!-- Fin botón payplay -->
</div>

  <!--___________________________________________INICIO PIE DE PAGINA___________________________________________
  <div id="footer" class="container-fluid">
    <div class="row p-5">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <img src="../assets/icons/Plantas_reyes_LOGOS-09.png" alt="PlantasReyes" width="100rem" height="100rem">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <p>Nosotros</p>
        <p>Contacto</p>
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
  <script src="../js/payment.js" type="module"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
   <!-- Include the PayPal JavaScript SDK -->
   <script src="https://www.paypal.com/sdk/js?client-id=AUuKxdTSC8x--Xy4GF9QQPiBHU1CPVSDhL8WeNTgUOWZChIj9aEzGvHLQMjafU9EOmghcMALk_dKKbo3&currency=MXN"></script>

   <script>
       // Render the PayPal button into #paypal-button-container
       paypal.Buttons({
               style:{
                   color: 'blue',
                   shape: 'pill',
                   lable: 'pay'
               },
               CreateOrder: function(date, actions){
                   return actions.order.create({
                       purchase_units: [{
                           amount: {
                               value: 1000
                           }
                       }]
                   })
               }, 
               onApprove: function(date, action){
                   actions.order.capture().then(function (detalles){
                       console.log(detalles)
                   });
               },

               onCancel: function(data){
                   alert("Pago cancelado");
                   console.log(data);
               }


           // // Call your server to set up the transaction
           // createOrder: function(data, actions) {
           //     return fetch('/demo/checkout/api/paypal/order/create/', {
           //         method: 'post'
           //     }).then(function(res) {
           //         return res.json();
           //     }).then(function(orderData) {
           //         return orderData.id;
           //     });
           // },

           // // Call your server to finalize the transaction
           // onApprove: function(data, actions) {
           //     return fetch('/demo/checkout/api/paypal/order/' + data.orderID + '/capture/', {
           //         method: 'post'
           //     }).then(function(res) {
           //         return res.json();
           //     }).then(function(orderData) {
           //         // Three cases to handle:
           //         //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
           //         //   (2) Other non-recoverable errors -> Show a failure message
           //         //   (3) Successful transaction -> Show confirmation or thank you

           //         // This example reads a v2/checkout/orders capture response, propagated from the server
           //         // You could use a different API or structure for your 'orderData'
           //         var errorDetail = Array.isArray(orderData.details) && orderData.details[0];

           //         if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
           //             return actions.restart(); // Recoverable state, per:
           //             // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
           //         }

           //         if (errorDetail) {
           //             var msg = 'Sorry, your transaction could not be processed.';
           //             if (errorDetail.description) msg += '\n\n' + errorDetail.description;
           //             if (orderData.debug_id) msg += ' (' + orderData.debug_id + ')';
           //             return alert(msg); // Show a failure message (try to avoid alerts in production environments)
           //         }

           //         // Successful capture! For demo purposes:
           //         console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
           //         var transaction = orderData.purchase_units[0].payments.captures[0];
           //         alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

           //         // Replace the above to show a success message within this page, e.g.
           //         // const element = document.getElementById('paypal-button-container');
           //         // element.innerHTML = '';
           //         // element.innerHTML = '<h3>Thank you for your payment!</h3>';
           //         // Or go to another URL:  actions.redirect('thank_you.php');
           //     });
           // }

       }).render('#paypal-button-container');
   </script>
   <script src="/js/UserStatus.js"></script>
</body>
</html>