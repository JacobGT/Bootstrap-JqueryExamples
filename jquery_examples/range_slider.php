<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Range Slider</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 45, 100 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "Q" + ui.values[ 0 ] + " - Q" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "Q" + $( "#slider-range" ).slider( "values", 0 ) +
      " - Q" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Range Slider</h1>
       
    <p>
  <label for="amount">Rango de Precio:</label>
  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
</p>
 
<div id="slider-range"></div>

<p>Este componenete es un selector de rango, es decir puedes usar el slider para escoger un minimo y un maximo, en este caso lo usariamos para escoger un rango de precios para uno de nuestros productos o servicios. (Aunque no necesariamente tiene que referirse a cantidad numerica)</p>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>