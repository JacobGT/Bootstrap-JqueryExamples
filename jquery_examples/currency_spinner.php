<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Currency Spinner</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/jquery.mousewheel.js"></script>
<script src="http://jqueryui.com/resources/demos/external/globalize.js"></script>
<script src="http://jqueryui.com/resources/demos/external/globalize.culture.de-DE.js"></script>

<link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css" />
  <script>
  $( function() {
    $( "#currency" ).on( "change", function() {
      $( "#spinner" ).spinner( "option", "culture", $( this ).val() );
    });
 
    $( "#spinner" ).spinner({
      min: 5,
      max: 2500,
      step: 25,
      start: 1000,
      numberFormat: "C"
    });
  } );
  </script>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Currency Spinner</h1>
       
    <p>
  <label for="spinner">Cantidad a donar:</label>
  <input id="spinner" name="spinner" value="5">
</p>
 
<p>
  <label for="currency">Divisa:</label>
  <select id="currency" name="currency">
    <option value="en-US">US $</option>
    <option value="gt-GT">Quetzal Q</option>
    <option value="de-DE">EUR &#x20AC;</option>
    <option value="ja-JP">YEN &#xA5;</option>
  </select>
</p>

<p>Este componente de Jquery permite tener un espacio donde no solo el usuario pueda ingresar un numero sino que hay flechas que aumentan un cierto numero. Tambien podemos tener un dropdown box que en este caso está representando donaciones a la empresa.</p>
    
    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>