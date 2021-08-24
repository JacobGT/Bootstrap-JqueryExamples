<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Download Progress Bar</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var progressTimer,
      progressbar = $( "#progressbar" ),
      progressLabel = $( ".progress-label" ),
      dialogButtons = [{
        text: "Cancelar",
        click: closeDownload
      }],
      dialog = $( "#dialog" ).dialog({
        autoOpen: false,
        closeOnEscape: false,
        resizable: false,
        buttons: dialogButtons,
        open: function() {
          progressTimer = setTimeout( progress, 2000 );
        },
        beforeClose: function() {
          downloadButton.button( "option", {
            disabled: false,
            label: "Descargar"
          });
        }
      }),
      downloadButton = $( "#downloadButton" )
        .button()
        .on( "click", function() {
          $( this ).button( "option", {
            disabled: true,
            label: "Descargando..."
          });
          dialog.dialog( "open" );
        });
 
    progressbar.progressbar({
      value: false,
      change: function() {
        progressLabel.text( "Progreso: " + progressbar.progressbar( "value" ) + "%" );
      },
      complete: function() {
        progressLabel.text( "Completado!" );
        dialog.dialog( "option", "buttons", [{
          text: "Cerrar",
          click: closeDownload
        }]);
        $(".ui-dialog button").last().trigger( "focus" );
      }
    });
 
    function progress() {
      var val = progressbar.progressbar( "value" ) || 0;
 
      progressbar.progressbar( "value", val + Math.floor( Math.random() * 3 ) );
 
      if ( val <= 99 ) {
        progressTimer = setTimeout( progress, 50 );
      }
    }
 
    function closeDownload() {
      clearTimeout( progressTimer );
      dialog
        .dialog( "option", "buttons", dialogButtons )
        .dialog( "close" );
      progressbar.progressbar( "value", false );
      progressLabel
        .text( "Descargando..." );
      downloadButton.trigger( "focus" );
    }
  } );
  </script>
  <style>
  #progressbar {
    margin-top: 20px;
  }
 
  .progress-label {
    font-weight: bold;
    text-shadow: 1px 1px 0 #fff;
  }
 
  .ui-dialog-titlebar-close {
    display: none;
  }
  </style>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Download Progress Bar</h1>
       
    <div id="dialog" title="Descargando Archivo">
  <div class="progress-label">Descargando...</div>
  <div id="progressbar"></div>
</div>
<button id="downloadButton">Descargar</button>

<p>Este componente JQuery está hecho de un progress bar. Que es una barra que muestra el prograso, en este caso de una descarga. Tiene animacion y distintas opciones.</p>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>