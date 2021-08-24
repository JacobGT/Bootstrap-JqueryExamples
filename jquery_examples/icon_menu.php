<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Icon Menu</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#menu" ).menu();
  } );
  function guardar(){
    window.alert("Guardado");
  }
  function zoom(){
    window.alert("Imaginate el zoom.")
  }
  function imprimir(){
    window.alert("Está funcion está deshabilitada");
  }
  function anterior(){
    window.alert("Reproduciendo pista anterior");
  }
  function siguiente(){
    window.alert("Reproduciendo la siguiente cancion");
  }
    function play(){
    window.alert("Poniendole Play a la musica");
  }
    function stop(){
    window.alert("Parando la musica");
  }
    function info(){
    window.alert("Este componente es util para cuando quires tener un menú (con submenú si así lo deseas) que tengan iconos.");
  }

  </script>
  <style>
  .ui-menu { width: 150px; }
  </style>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Icon Menu</h1>
       
    <ul id="menu">
  <li>
    <div onclick="guardar()"><span class="ui-icon ui-icon-disk"></span>Guardar</div>
  </li>
  <li>
    <div onclick="zoom()"><span class="ui-icon ui-icon-zoomin"></span>Zoom In</div>
  </li>
  <li>
    <div onclick="zoom()"><span class="ui-icon ui-icon-zoomout"></span>Zoom Out</div>
  </li>
  <li class="ui-state-disabled">
    <div onclick="imprimir()"><span class="ui-icon ui-icon-print"></span>Imprimir...</div>
  </li>
  <li>
    <div>Musica</div>
    <ul>
      <li>
        <div onclick="anterior()"><span class="ui-icon ui-icon-seek-start"></span>Anterior</div>
      </li>
      <li>
        <div onclick="stop()"><span class="ui-icon ui-icon-stop"></span>Stop</div>
      </li>
      <li>
        <div onclick="play()"><span class="ui-icon ui-icon-play"></span>Play</div>
      </li>
      <li>
        <div onclick="siguiente()"><span class="ui-icon ui-icon-seek-end"></span>Siguiente</div>
      </li>
    </ul>
  </li>
  <li>
    <div onclick="info()">Informacion</div>
  </li>
</ul>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>