<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Time Spinner</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://jqueryui.com/resources/demos/external/globalize/globalize.js"></script>
        <script src="https://jqueryui.com/resources/demos/external/globalize/globalize.culture.de-DE.js"></script>
        <script src="https://jqueryui.com/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script>
        $( function() {
          $.widget( "ui.timespinner", $.ui.spinner, {
            options: {
              // seconds
              step: 60 * 1000,
              // hours
              page: 60
            },

            _parse: function( value ) {
              if ( typeof value === "string" ) {
                // already a timestamp
                if ( Number( value ) == value ) {
                  return Number( value );
                }
                return +Globalize.parseDate( value );
              }
              return value;
            },

            _format: function( value ) {
              return Globalize.format( new Date(value), "t" );
            }
          });

          $( "#spinner" ).timespinner();

          $( "#culture" ).on( "change", function() {
            var current = $( "#spinner" ).timespinner( "value" );
            Globalize.culture( $(this).val() );
            $( "#spinner" ).timespinner( "value", current );
          });
        } );
        </script>
    </head>
    <body style="background-color: #ccffcc">
        <h1>Time Spinner</h1>
       
    <p>
      <label for="spinner">Hora:</label>
      <input id="spinner" name="spinner" value="08:30 PM">
    </p>
    <p>
      <label for="culture">Formato de hora:</label>
      <select id="culture">
        <option value="en-EN" selected="selected">12 horas</option>
        <option value="de-DE">24 horas</option>
      </select>
    </p>

    <p>Este componente JQuery es otro tipo spinner. En este ejemplo el usuario puede escoger una hora y pasarlo de formato.</p>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>