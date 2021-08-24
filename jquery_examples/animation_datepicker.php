<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Animation Date Picker</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
    $( "#anim" ).on( "change", function() {
      $( "#datepicker" ).datepicker( "option", "showAnim", $( this ).val() );
    });
  } );
  </script>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Animation Date Picker</h1>
       
    <p>Fecha: <input type="text" id="datepicker" size="30"></p>
 
<p>Animaciones:<br>
  <select id="anim">
    <option value="show">Show (default)</option>
    <option value="slideDown">Slide down</option>
    <option value="fadeIn">Fade in</option>
    <option value="blind">Blind (UI Effect)</option>
    <option value="bounce">Bounce (UI Effect)</option>
    <option value="clip">Clip (UI Effect)</option>
    <option value="drop">Drop (UI Effect)</option>
    <option value="fold">Fold (UI Effect)</option>
    <option value="slide">Slide (UI Effect)</option>
    <option value>None</option>
  </select>
</p>

<p>
  Este componente de JQuery es muy util para que el usuario escoga una fecha. Este en especial tiene distintas animacionos que puedes probar y permite cambiar de mes con las flechas.
</p>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>