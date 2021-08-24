<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Product Selection SelectMenu</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <style>
    fieldset {
      border: 0;
      margin-left: 300px;
    }
    label {
      display: block;
      margin: 20px 0 0 0;
    }
 
    #circle {
      float: left;
      background: yellow;
      border-radius: 50%;
      width: 150px;
      height: 150px;
    }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var circle = $( "#circle" );
 
    $( "#radius" ).selectmenu({
      change: function( event, data ) {
        circle.css({
          width: data.item.value,
          height: data.item.value
        });
      }
     });
 
    $( "#color" ).selectmenu({
       change: function( event, data ) {
         circle.css( "background", data.item.value );
       }
     });
  } );
  </script>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Product Selection SelectMenu</h1>
       
    <div class="demo">
 
<form action="#">
 
  <div id="circle"></div>
 
  <fieldset>
    <label for="radius">Radio del Circulo</label>
    <select name="radius" id="radius">
      <option value="50">50px</option>
      <option value="100">100px</option>
      <option value="150" selected="selected">150px</option>
      <option value="200">200px</option>
      <option value="250">250px</option>
    </select>
 
    <label for="color">Color del Circulo</label>
    <select name="color" id="color">
      <option value="black">Negro</option>
      <option value="red">Rojo</option>
      <option value="yellow" selected="selected">Amarillo</option>
      <option value="blue">Azul</option>
      <option value="green">Verde</option>
    </select>
  </fieldset>
 
</form>
 
</div>

  <p>Componente JQuery con selectmenus cuyas opciones alteran la imagen en la pagina web.</p>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>