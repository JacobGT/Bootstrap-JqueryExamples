<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Jumbotron</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/jumbotron/">

    

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
    function cool(){
      window.alert("(⌐■_■) Lo sé.  >⌐■-■");
    }
    function interesante(){
      window.alert("ヘ( ^o^)ノ＼(^_^ ) Gracias, nos esforzamos mucho.");
    }
    function felicidades(){
      window.alert("╮ (. ❛ ᴗ ❛.) ╭ Somos un buen equipo. (ᵔᴥᵔ)");
    }
    </script>

    </head>

    <body style="background-color: #ccffcc">
        <h1>Jumbotron</h1>
       
    <main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">Ejemplo de Jumbotron</span>
      </a>
    </header>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Custom Jumbotron</h1>
        <p class="col-md-8 fs-4">Con un Jumbotron puedes hacer cuadros con texto para hacer sobresalir la informacion necesaria.</p>
        <button class="btn btn-primary btn-lg" type="button" onclick="cool()">Cool</button>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Nuestra Empresa</h2>
          <p>Nuestra empresa trata de ser la mejor en el area de cyber seguridad ofreciendo servicios muy utiles para el consumidor. Dichos servicios constan de: anti virus, vpn, anti cheats, etc.</p>
          <button class="btn btn-outline-light" type="button" onclick="interesante()">Wow, interesante.</button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Nuestro Equipo</h2>
          <p>El equipo Cyber Dagger está conformado por personas de alta calidad. Cada departamento tiene a un profesional como líder que tiene la capacidad de lograr metas y objetivos propuestos o solicitados por los clientes. ¡Conócenos! </p>
          <button class="btn btn-outline-secondary" type="button" onclick="felicidades()">Felictaciones a su equipo.</button>
        </div>
      </div>
    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      &copy; Cyber Dagger 2021 <p><a href="../index.php"> Home</a></p>
    </footer>
  </div>
</main>
    </body>
</html>