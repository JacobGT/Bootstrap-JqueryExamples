<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Cover</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

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

    body { 
      background: url(images/fondo_empresa.png) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    </style>

    <script type="text/javascript">
    function info(){
      window.alert("Puedes aprender más de este componente en el sito oficial de Bootstrap.");
    }

    function otraInfo(){
      window.alert("Estás funcionalidades abrirían otro archivo .php o .html y redirigiría a otra parte de la pagina.");
    }
    </script>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    </head>
    <body style="background-color: #ccffcc" class="d-flex h-100 text-center text-white bg-dark">
        <h1>Cover</h1>
       
   <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Cover</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        <a class="nav-link" href="#" onclick="otraInfo()">Productos</a>
        <a class="nav-link" href="#" onclick="otraInfo()">Contacto</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1 style="font-size:300%;">Bootstrap "Cover".</h1>
    <p class="lead" style="color:#ffffff; font-size:150%;"><b>Este es un componente Bootstrap cuya funcionalidad es ser un "template" para un home page. Osea, su utilidad se aprovecha en ser la pagina de inicio. Esta se puede decorar y cambiar para cambiar el estilo y otros componentes.</b></p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white" onclick="info()">Más info</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Cyber Dagger 2021. <a href="../index.php" class="text-white"</a>Home</p>
  </footer>
</div>
    </body>
</html>