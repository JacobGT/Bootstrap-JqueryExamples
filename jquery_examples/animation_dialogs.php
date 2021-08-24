<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Animation Dialogs</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#opener" ).on( "click", function() {
      $( "#dialog" ).dialog( "open" );
    });
  } );
  </script>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Animation Dialogs</h1>
       
    <div id="dialog" title="Otro Componente JQUery">
  <p>Este componente es muy util para mostrar cualquier tipo de informacion de texto al usuario. </p>
</div>
 
<button id="opener">Has Click Aquí</button>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>