<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Blog</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

    

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
      function subscribe() {
        window.confirm("Gracias por suscribirte a nuestra empresa.");
      }

      function signUp() {
        windows.confirm("Está funcion estará disponible muy pronto.")
      }
    </script>
    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

    </head>
    <body style="background-color: #ccffcc">
        <h1>Blog</h1>
       
        <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" onclick="subscribe()">Suscribirse para recibir notificaciones</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Cyber Dagger</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" onclick="signUp()">Sign up</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#servicios">Servicios</a>
      <a class="p-2 link-secondary" href="#acerca">Acerca de Nosotros</a>
      <a class="p-2 link-secondary" href="#contacto">Contactanos</a>
      <a class="p-2 link-secondary" href="../index.php">Inicio</a>
    </nav>
  </div>
</div>

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Noticias Acerca de Nuestros Servicios</h1>
      <p class="lead my-3">Un blog es un componente de Bootstrap que se puede usar como un blog cualquiera. En este ejemplo estámos demostrando como lo usaríamos entorno a nuestra empresa. Este componente está compueste de varios subcomponentes que se pueden usar con imagenes, texto, botones, etc.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Seguir leyendo...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><a id="servicios">Servicios</a></strong>
          <h3 class="mb-0">Actualizacion de terminos y condiciones</h3>
          <div class="mb-1 text-muted">Agosto 17</div>
          <p class="card-text mb-auto">THay una nueva actualizacion de terminos y condiciones. Tienes que aceptarlos para antes que se acabe el año 2021 para poder seguir usando nuestros servicios.</p>
          <a href="#" class="stretched-link">Seguir leyendo</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success"><a id="acerca">Acerca de Nosotros</a></strong>
          <h3 class="mb-0">Una pequeña empresa con un grán proposito.</h3>
          <div class="mb-1 text-muted">Abril 7</div>
          <p class="mb-auto">Desde los inicios de la empresa, fundada por dos jovenes ingenieros con gran ambicion, la empresa ha crecido y mejorado en todos los aspectos.</p>
          <a href="#" class="stretched-link">Seguir leyendo</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

        </div>
      </div>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Historia de Cybber Dagger
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title">Los inicios</h2>
        <p class="blog-post-meta">Enero 1, 2020 por <a href="https://www.instagram.com/jacob_fr_gt/" target="_blank">Jacob Flores</a> y <a href="https://www.instagram.com/lambartt_off/" target="_blank">Rodrigo Leon</a></p>

        <p>La idea de está empresa surgió mientras recibiamos un curso en la carrera de ingeniería en sistemas y ciencias de la computacion.</p>
        <hr>
        <p>Estába claro que el anonimato es muy dificil de conseguir hoy en día. Con un fin en mente los dos ingenieros decidieron empezar una empresa que pudiera conseguir lo estipulado, ayudando a los cibernautas a sentirse mas seguros sin que un hacker tenga la apertura u oportunidad de poder hacer estragos con ellos y sus equipos.</p>
        <h2>Se agranda la manada</h2>
        <p>La fuerza está en los numeros.</p>
        <blockquote class="blockquote">
          <p>Dos mentes piensan mejor que una.</p>
        </blockquote>
        <p>Luego de empezar la empresa los dos ingenieros decidieron conseguir un poco de ayuda. Recurrieron a sus amigos: Diego y Sammy. Con su ayuda el viaje sería más facil...</p>
        <h3>El Futuro</h3>
        <p>Al pasar de los años, la empresa se solidificó y lograron hacer varias cosas:</p>
        <ul>
          <li>Tener el antivirus #1 en el mundo</li>
          <li>Uno de los mejores VPN´s</li>
          <li>Pentesting profesional</li>
        </ul>
        <p>Y no se detiene allí. Tenemos planes para el futuro como:</p>
        <ol>
          <li>Sistema Anti-Cheats</li>
          <li>Password Manager</li>
          <li>Data Encryption y Tracking</li>
        </ol>
        <p>Agradecemos todo el apoyo brindado a nosotros de parte de la communidad.</p>
        <dl>
          <dt>Nuestros valores:</dt>
          <dd>Honestidad, seguridad, eficiencia, calidad, colaboracion, pasión, orientación al cliente, confianza y el éxito.</dd>
          <dt>Nuestro mercado:</dt>
          <dd>Cualquier ente (ya sea empresa o persona) que requiera de cyber seguridad.</dd>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic"><a id="contacto">Contactanos </a></h4>
          <p class="mb-0">Si quieres contactarnos por cualquier razon o motivo no dudes en buscarnos en nuestras redes sociales como @cyber_dagger o envianos un correo <a href="mailto:info@cyber_dagger.com.gt">aquí</a>.</p>
        </div>

</main>

<footer class="blog-footer">
  <p>Sigue disfrutando de nuestra pagina web. Gracias por visitarnos.</p>
  <p>
    <a href="#">Back to top</a> <a href="../index.php"> Home</a>
  </p>
</footer>
    </body>
</html>