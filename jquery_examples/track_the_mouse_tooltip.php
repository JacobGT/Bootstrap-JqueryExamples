<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Track the Mouse Tool Tip</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <style>
  label {
    display: inline-block;
    width: 5em;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( document ).tooltip({
      track: true
    });
  } );
  </script>
    </head>
    <body style="background-color: #ccffcc">
        <h1>Track the Mouse Tool Tip</h1>
       
    <p><a href="#" title="Es caundo se pasa un objeto por encima, en este caso el mouse">Track</a> the mouse tool tip es otro componente que hace aparecer un popup con informacion cuando el mouse hace click o está arriba del area marcada.</p>
<p>Este en especial persigue el mouse donde esté y obviamente lo puedes personalizar.</p>
<p>Este es muy util a la hora que quieras dar informacion, como por ejemplo:</p>
<p><label for="age">Tu edad:</label><input id="age" title="Lo pedimos unicamente por razones de estadistica."></p>
<p>Sigue disfrutando de nuestra pagina web.</p>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>