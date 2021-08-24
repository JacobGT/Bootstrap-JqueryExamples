<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Album</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

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
      function clickLike() {
        window.confirm("Gracias por el apoyo. UwU");
      }

      function clickDislike(){
        window.confirm("Gracias por la critica constructiva. (◔_◔)");
      }
    </script>

    </head>

    <body style="background-color: #ccffcc">
        <h1>Album</h1>
       
      <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">¿Qué es?</h4>
          <p class="text-muted">El album es un componente de bootstrap que permite agregar imagenes con sus respectivas descripciones. Este componente puede ser muy util por si quieres mostrar una foto de un producto con una breve informacion.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contacto</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Sigue nos en Twitter @Cyber_Dagger</a></li>
            <li><a href="#" class="text-white">Danos like en Facebook @Cyber_Dagger</a></li>
            <li><a href="#" class="text-white">Sigue disfrutando de nuestra pagina web.</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Album</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Cyber Dagger</h1>
        <p class="lead text-muted">Una empresa hecha para mantener a los usuarios y servidores seguros, siempre manteniendo el derecho al anonimato. “On the verge of helpless… the cyber dagger will protect you. Security and anonymity are not a hobby,they are an invaluable resource” </p>
        <p>
          <a href="#" class="btn btn-primary my-2">Continuar viendo.</a>
          <a href="#final" class="btn btn-secondary my-2">Saltar al final.</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false" src="images/fondo_empresa.png" onclick="window.open(this.src, '_blank');">

            <div class="card-body">
              <p class="card-text">Somos una empresa que estima la seguridad y el derecho al anonimato encima de todo.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="clickLike()">Like</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="clickDislike()">Dislike</button>
                </div>
                <small class="text-muted">Very positive reviews</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false" src="images/organigrama_empresa.jpg" onclick="window.open(this.src, '_blank');">

            <div class="card-body">
              <p class="card-text">Tenemos productos de toda clase, ya sea para uso personal o empresarial.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="clickLike()">Like</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="clickDislike()">Dislike</button>
                </div>
                <small class="text-muted">Very positive reviews</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false" src="images/cybersecurity.jpeg" onclick="window.open(this.src, '_blank');">

            <div class="card-body">
              <p class="card-text">Contamos con vpn, anti cheats, pentesting, ciber secuity, etc.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="clickLike()">Like</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="clickDislike()">Dislike</button>
                </div>
                <small class="text-muted">Good reviews</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false" src="images/sword_and_shield.jpg" onclick="window.open(this.src, '_blank');">

            <div class="card-body">
              <p class="card-text">Somos mas eficaces y eficientes usando todos los recursos (nuestros servidores entre otros) brindando el mejor servicio a un buen precio.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="clickLike()">Like</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="clickDislike()">Dislike</button>
                </div>
                <small class="text-muted">Positive Reviews</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false" src="images/green_hacker.jpg" onclick="window.open(this.src, '_blank');">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="clickLike()">Like</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="clickDislike()">Dislike</button>
                </div>
                <small class="text-muted">Excellent reviews</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false" src="images/ninja-coder.png" onclick="window.open(this.src, '_blank');">

            <div class="card-body">
              <p class="card-text">Nuestros servicios son los mejores del mercado. Siempre te traemos ofertas, soluciones y precios razonables. Nuestro team está compuesto por los mejores ingenieros.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="clickLike()">Like</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="clickDislike()">Dislike</button>
                </div>
                <small class="text-muted">Superb reviews</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a id="final" href="#">Back to top</a>
    </p>
    <p class="mb-1"><a href="../index.php"> Home</a></p>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>