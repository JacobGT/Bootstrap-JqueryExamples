<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Split Control Group</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <style>
  .ui-button-icon-only.demo-splitbutton-select {
    width: 1em;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "select" ).selectmenu({
      classes: {
        "ui-selectmenu-button": "ui-button-icon-only demo-splitbutton-select"
      },
      change: function(){
        $( ".output" ).append( "<li>" + this.value + "</li>" );
      }
    });
    $( ".controlgroup" ).controlgroup();
    $( "button" ).click(function() {
      $( ".output" ).append( "<li>Ejecutando Ultima Accion...</li>" );
    });
  } );
  </script>
    </head>
    <body style="background-color: #ccffcc">
        <h1>Split Control Group</h1>
       
    <div class="widget">
  <h1>Boton Dividido</h1>
  <div class="controlgroup">
    <button>Ejecutar Ultima Opcion</button>
    <select>
      <option>Abrir...</option>
      <option>Guardar</option>
      <option>Borrar</option>
    </select>
  </div>
  <br>
  <h3>Salida:</h3>
  <ul class="output"></ul>
</div>
    
    <p>Este componente JQuery funciona para que existan distintas opciones adentro de un boton. En este caso reproduce un poco de texto de cada botón.</p>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>