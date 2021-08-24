<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Heroes</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">

    

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

    <script type="text/javascript">
    function gracias(){
      window.alert("Wuuuuu!!!! Que bueno que te guste ( 。・_・。)人(。・_・。 )");
    }
    function noGracias(){
      window.alert("Lastima... Para mi opinion se ve bonito... y nos costo mucho hacerlo (╯°□°）╯︵ ┻━┻");
    }
    function genial(){
      window.alert("Genial, continúa leyendo más acerca de nosotros... ah y oye, gracias por apoyarnos :3");
    }
    function nope(){
      window.alert("ª... bueno, le metimos empeño y esfuerzo a la pagina y nos tomamos fotos y las recortamos y todo... pero bueno... no importa supongo... no estoy llorando... es solo una piedrita en el ojo ╥﹏╥");
    }
    function felicidades(){
      window.alert("Gracias por el apoyo. En serio se aprecia mucho. ⸜( ˙˘˙)⸝ 💓");
    }
    function mejora(){
      window.alert("(´;︵;`) Siempre existe oportunidad de mejora y nosotros queremos aprovechar cualquier oportunidad para mejorar en todos los ambitos.");
    }
    </script>
    
    <!-- Custom styles for this template -->
    <link href="heroes.css" rel="stylesheet">

    </head>

    <body style="background-color: #ccffcc">
        <h1>Heroes</h1>
       
    <main>
  <h1 class="visually-hidden">Ejemplos de Heroes</h1>

  <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="images/logo_background.png" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">Hero Centrado</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Hero es un componente de Bootstrap hecho para destacar imagenes con texto de una forma muy estilizada.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3" onclick="gracias()">Nice!</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4" onclick="noGracias()">No me gusta</button>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Ejemplo</h1>
        <p class="col-lg-10 fs-4">Un ejemplo de uso de este componente es un registro de usuario..</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Correo electrónico</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Contraseña</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Recuérdame
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
          <hr class="my-4">
          <small class="text-muted">Al Registrarse, acepta los términos y condiciones de uso.</small>
        </form>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">Nuestro Equipo</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">Nuestro equipo está conformado de cuatro estudiantes de la poderosisima Ingeniería en Sistemas y Ciencias de la Computación en la USPG. A continuacion podrás leer y ver más acerca de ellos.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold" onclick="genial()">Genial</button>
          <button type="button" class="btn btn-outline-light btn-lg px-4" onclick="nope()">No, Gracias</button>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Jacob Flores Rueda</h1>
        <p class="lead">Me encanta la tecnología, ir al gym y jugar video juegos. Me gustaría aprender más acerce del tema de la inteligencia artificial... quien sabe, incluso algún día poder trabajar en eso. Guatemalteco, 20 años.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" onclick="felicidades()">Bien hecho!</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4" onclick="mejora()">Puede mejorar.</button>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Rodrigo Jose Leon Chinchilla</h1>
        <p class="lead">Me gusta el anime y jugar videojuegos con Jacob, en especial Valorant. Me interesa el area de cyberseguridad y sus respectivas ramas. Soy de Chiquimula y me gusta pasarla bien y celebrar en grande. Guatemala, 22 años.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" onclick="felicidades()">Bien hecho!</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4" onclick="mejora()">Puede mejorar.</button>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="bootstrap-docs-rodrigo.png" alt="" width="720">
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>
  
  <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold">Diego Andres Calderon de Leon</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Me gusta jugar videojuegos, en especial Rocket League; pero no me gusta jugar con Jacob ni Rodrigo... no se por que :,( pero ni modo. Me interesa el area de desarrollo de video juegos; de hecho, estoy trabajando en un videojuego propio. La vida es una fiesta, solo hay que disfrutarla! Guatemala, 20 años.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3" onclick="felicidades()">Bien hecho!</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4" onclick="mejora()">Puede mejorar.</button>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="bootstrap-docs-diego.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold">Helen Samantha Gonzalez Alvarado</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Para nada me gusta jugar videojuegos con mis compañeros de la U. Me gusta decorar todo y que todo sea kawaii, cute y aesthetic... Me interesa el area de diseño y front end develpment. Guatemala, 23 años.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3" onclick="felicidades()">Bien hecho!</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4" onclick="mejora()">Puede mejorar.</button>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="bootstrap-docs-sammy.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>

  <div class="b-example-divider mb-0"></div>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>