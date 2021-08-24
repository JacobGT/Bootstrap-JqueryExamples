<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Icon Button</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".widget button" )
      .eq( 0 ).button()
      .end().eq( 1 ).button( {
        icon: "ui-icon-gear",
        showLabel: false
      } ).end().eq( 2 ).button( {
        icon: "ui-icon-gear"
      } ).end().eq( 3 ).button( {
        icon: "ui-icon-gear",
        iconPosition: "end"
      } ).end().eq( 4 ).button( {
        icon: "ui-icon-gear",
        iconPosition: "top"
      } ).end().eq( 5 ).button( {
        icon: "ui-icon-gear",
        iconPosition: "bottom"
      } );
  } );
  function curioso(){
    window.alert("Ya ví que le diste click a un boton. Que bueno que estes probando cosas en nuestro sitio web.")
  }
  </script>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Icon Button</h1>
       
    <div class="widget">
  <h1>Otro Componente JQuery</h1>
  <button onclick="curioso()">Puedes usar estos componentes</button>
  <button onclick="curioso()">Solo Icono</button>
  <button onclick="curioso()">Puedes tener boton sin texto, solo icono</button>
  <button onclick="curioso()">Los iconos pueden estar en distintos lugares</button>
  <button onclick="curioso()">Como arriba, abajo, derecha, o izquierda</button>
  <button onclick="curioso()">Y lo puedes personalizar de distintas maneras.</button>
</div>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>