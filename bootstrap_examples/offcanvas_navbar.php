<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Offcanvas Navbar</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/offcanvas-navbar/">

    

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
    function curioso(){
      window.alert("Que conste que estas conversaciones fueron planeadas, nuestro equipo no tuvo ningun problema trabajando juntos y nadie me está obligando a escribir esto.... o_O");
    }
    </script>
    
    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">

    </head>

    <body style="background-color: #ccffcc">
        <h1>Offcanvas Navbar</h1>
       
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Offcanvas navbar</a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Panel de Control</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notificaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cambiar Cuenta</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Ajustes</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="#">Cambiar nombre de usuario</a></li>
            <li><a class="dropdown-item" href="#">Cambiar contraseña</a></li>
            <li><a class="dropdown-item" href="#">Activar modo oscuro</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<div class="nav-scroller bg-body shadow-sm">
  <nav class="nav nav-underline" aria-label="Secondary navigation">
    <a class="nav-link active" aria-current="page" href="#">Panel de Control</a>
    <a class="nav-link" href="#">
      Amigos
      <span class="badge bg-light text-dark rounded-pill align-text-bottom">27</span>
    </a>
    <a class="nav-link" href="#">Explorar</a>
    <a class="nav-link" href="#">Sugerencias</a>
    <a class="nav-link" href="#">Ver perfil</a>
    <a class="nav-link" href="#">Mejora tu cuenta</a>
    <a class="nav-link" href="#">Administra tu cuenta</a>
    <a class="nav-link" href="#">Ver compras recientes</a>
    <a class="nav-link" href="#">Ver productos disponibles</a>
  </nav>
</div>

<main class="container" >
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    <img class="me-3" src="images/logo_background.png" alt="" width="48" height="38">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">CyberDagger</h1>
      <small>Desde 2020</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Equipo CyberDagger</h6>
    
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark"><a href="https://www.instagram.com/andrescalde32/" target="_blank">@andrescalde32</a></strong>
        Me gritaron 5 veces en el transcurso de este proyecto. Pero todo salió bien.
      </p>
    </div>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark"><a href="https://www.instagram.com/samy.gt/" target="_blank">@samy.gt</a></strong>
        Tratando de sobrevivir con un equipo que no le presta atención al diseño por ser "ingenieros". Pero todo salió bien.
      </p>
    </div>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#ffff00"/></svg>

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark"><a href="https://www.instagram.com/lambartt_off/" target="_blank">@lambartt_off</a></strong>
        Este grupo no tiene el don de la elegancia verbal, mi ayuda fue muy necesaria en el proyecto.
      </p>
    </div>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark"><a href="https://www.instagram.com/jacob_fr_gt/" target="_blank">@jacob_fr_gt</a></strong>
        Diseño? jajaja nah, somos ingenieros no diseñadores xdddd. Arriba la Ingeniería en Sistemas!!!!!!!! Casaca? Si, usamos un poco de la de Rodrigo, pero igual... la informacion es más necesaria que la casaca y no, no es cierto que le grité a Diego, dejenme de preguntar eso.
      </p>
    </div>
    <small class="d-block text-end mt-3">
      <a href="#" onclick="curioso()">Mirar publicaciones anteriores</a>
    </small>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Redes CyberDagger</h6>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-gray-dark">Twitter</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">@TwCyberDagger</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-gray-dark">Facebook</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">CyberDagger</span>
      </div>
    </div>
  
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-gray-dark">Instagram</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">@CyberDagger</span>
      </div>
    </div>
    <small class="d-block text-end mt-3">
      <a href="#">Todas las sugerencias</a>
    </small>
  </div>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="offcanvas.js"></script>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>