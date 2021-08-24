<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Checkout</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <script>
    function redimir(){
      windows.confirm("Ya se ha usado un codigo promocional.");
    }

    function comprar(){
      windows.confirm("Gracias por la compra :3");
    }
    </script>
    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">

    </head>
    <body style="background-color: #ccffcc">
        <h1>Checkout</h1>
       
    <div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../assets/brand/cyber_dagger.svg" alt="" width="72" height="57">
      <h2>Checkout form</h2>
      <p class="lead">El checkout es otro componente hecho con Bootstrap. Este puede ser usado a la hora de comprar un item y requiere que se llene el formulario para proceder. Este en especifico es muy util para tiendas online y similares.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Carrito de Compras:</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Antivirus P1</h6>
              <small class="text-muted">Plan individual de 1 año tipo Platino, cobertura 5 dispositivos.</small>
            </div>
            <span class="text-muted">$100.00</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">VPN P1</h6>
              <small class="text-muted">VPN personal Platino por 1 año con unlimited data cap a todos los servidores disponibles.</small>
            </div>
            <span class="text-muted">$100.00</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Password Manager Platino</h6>
              <small class="text-muted">Password manager para un maximo de 10 equipos con un plan personal tipo Platino.</small>
            </div>
            <span class="text-muted">$75</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Codigo Promocional</h6>
              <small>ESTUDIANTE_USPG </small>
            </div>
            <span class="text-success">−$15</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$250</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Codigo Promocional">
            <button type="submit" class="btn btn-secondary" onclick="redimir()">Redimir</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Informacion de Facturacion</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Se requiere un nombre válido.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Apellidos </label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Se requiere un apellido válido..
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Usuario</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
              <div class="invalid-feedback">
                  Es necesario ingresar su usuario.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Favor de ingresar un correo válido. Se usara solo para el shipping.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Direccion</label>
              <input type="text" class="form-control" id="address" placeholder="4 Calle 23-03, Zona 14" required>
              <div class="invalid-feedback">
                Ingrese su direccion para el envío..
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Direccion 2 <span class="text-muted">(Opcional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartamento, Condominio u otra informacion relevante">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">País</label>
              <select class="form-select" id="country" required>
                <option value="">Escoja...</option>
                <option>Estados Unidos</option>
                <option>Guatemala</option>
                <option>Israel</option>
                <option>Inglaterra</option>
                <option>Brazil</option>
                <option>España</option>
                <option>Russia</option>
                <option>Alemania</option>
                <option>Otro</option>
              </select>
              <div class="invalid-feedback">
                Porfavor seleccione un país válido.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Estado</label>
              <select class="form-select" id="state" required>
                <option value="">Escoja...</option>
                <option>California</option>
                <option>Nueva York</option>
                <option>Texas</option>
                <option>Guatemala</option>
                <option>Jerusalem</option>
                <option>Kiev</option>
                <option>Barcelona</option>
                <option>Otro</option>
              </select>
              <div class="invalid-feedback">
                Porfavor seleccione un estado válido.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip (Codigo Postal)</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Se requiere un código postal.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">La direccion de envio es igual a la direccion de facturacion.</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Guardar mi informacion para mi proxima compra.</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Pago</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Tarjeta de Credito</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Tarjeta de Debito</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nombre en la Tarjeta</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Tiene que poner el nombre completo de como aparece en la tarjeta.</small>
              <div class="invalid-feedback">
                El nombre es algo requerido.
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Numero de Tarjeta</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                El numero de tarjeta es requerido.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Fecha de Expiracion</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Se requiere que ingrese al fecha de expiracion.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Codigo de seguridad es requerido para procesar su compra.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button onclick="comprar()" class="w-100 btn btn-primary btn-lg" type="submit" >Comprar</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021–2022 Cyber Dagger</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad</a></li>
      <li class="list-inline-item"><a href="#">Condicion y Terminos</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
      <li><a href="../index.php">Inicio</a></li>
    </ul>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>

    </body>
</html>