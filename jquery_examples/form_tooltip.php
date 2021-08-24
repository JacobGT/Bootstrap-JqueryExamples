<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Form Tool Tip</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <style>
  label {
    display: inline-block; width: 5em;
  }
  fieldset div {
    margin-bottom: 2em;
  }
  fieldset .help {
    display: inline-block;
  }
  .ui-tooltip {
    width: 210px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var tooltips = $( "[title]" ).tooltip({
      position: {
        my: "left top",
        at: "right+5 top-5",
        collision: "none"
      }
    });
    $( "<button>" )
      .text( "Ayuda" )
      .button()
      .on( "click", function() {
        tooltips.tooltip( "open" );
      })
      .insertAfter( "form" );
  } );
  </script>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Form Tool Tip</h1>
       
    <form>
  <fieldset>
    <div>
      <label for="firstname">Nombre</label>
      <input id="firstname" name="firstname" title="Porfavor ingresa un nombre.">
    </div>
    <div>
      <label for="lastname">Apellidos</label>
      <input id="lastname" name="lastname" title="Por favor ingresa tus apellidos.">
    </div>
    <div>
      <label for="address">Direccion</label>
      <input id="address" name="address" title="Por favor ingrese su direccionde su casa o lugar de trabajo.">
    </div>
  </fieldset>
</form>

  <p> Este componente JQuery hace que aparezca un popup en un formulario cuando el mouse está encima de dicho espacio o si se hace click en el boton.</p>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>