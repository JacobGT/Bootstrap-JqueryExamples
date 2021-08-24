<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Product Checkbox</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    function handleShape( e ) {
      $( ".shape" )
        .removeClass( "circle pill square rectangle" )
        .addClass( $( e.target ).val() );
    };
    function handleToggle( e ) {
      var target = $( e.target );
 
      if ( target.is( ".brand-toggle" ) ) {
        var checked = target.is( ":checked" ),
          value = $( "[name='brand']" )
            .filter( ":checked" )
            .attr( "data-" + target[ 0 ].id )
        $( ".shape" ).css( target[ 0 ].id, checked ? value : "" );
      } else {
        $( ".shape" ).toggleClass( target[ 0 ].id, target.is( ":checked") );
      }
    }
    function updateBrand() {
      handleShape( { target: $( "[name='shape']:checked" ) } );
      $( ".toggle:checked" ).each( function() {
        handleToggle( { target: $( this ) } );
      } );
    }
 
    // Initalize widgets
    $( "input" ).checkboxradio();
    $( ".shape-bar, .brand" ).controlgroup();
    $( ".toggles" ).controlgroup( {
      direction: "vertical"
    } );
 
    // Bind event handlers
    $( "[name='shape']").on( "change", handleShape );
    $( ".toggle" ).on( "change", handleToggle );
    $( "[name='brand']").on( "change", updateBrand );
 
    // Set initial values
    updateBrand();
  } );
  </script>
  <style>
    .shape {
      margin-left: 4em;
      margin-top: 2.5em;
      height: 8em;
      width: 8em;
      box-shadow: 4px 4px 8px;
      color: #ccc;
      background-repeat: no-repeat;
      background-size: 90%;
      background-position: 50%;
    }
    .circle, .pill {
      border-radius: 8em;
    }
    .pill, .rectangle {
      width: 16em;
    }
    .square, .circle {
      margin-left: 9em;
    }
    .border {
      border: 2px solid #333333;
    }
    .toggles {
      width: 200px;
    }
    .toggle-wrap, .shape {
      display: inline-block;
      vertical-align: top;
    }
    .controls {
      background: #ccc;
      padding: 1em;
      display: inline-block;
    }
  </style>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Product Checkbox</h1>
       
   <div class="controls">
  <div class="brand-wrap">
    <h3>1.) Escoge un estilo</h3>
    <div class="brand">
      <label for="brand-jquery">Galaxy Cool</label>
      <input type="radio" name="brand" id="brand-jquery" data-background-color="#00ffff" data-color="#862d86" data-background-image="url(images/no_background_logo.png)">
      <label for="brand-jquery-ui">Lime Shine</label>
      <input type="radio" name="brand" id="brand-jquery-ui" data-background-color="#00ff00" data-color="#00ff99" data-background-image="url(images/no_background_logo.png)" checked>
      <label for="brand-jquery-mobile">Crimson Blood</label>
      <input type="radio" name="brand" id="brand-jquery-mobile" data-background-color="#ff0000" data-color="#ff9900" data-background-image="url(images/no_background_logo.png)">
      <label for="brand-sizzle">Yellow Mellow</label>
      <input type="radio" name="brand" id="brand-sizzle" data-background-color="#ffff00" data-color="#ccff99" data-background-image="url(images/no_background_logo.png)">
      <label for="brand-qunit">Darknes Rises</label>
      <input type="radio" name="brand" id="brand-qunit" data-background-color="#000066" data-color="#000033" data-background-image="url(images/no_background_logo.png)">
    </div>
  </div>
  <div class="shape-wrap">
    <h3>2.) Escoge una forma</h3>
    <div class="shape-bar">
      <label for="shape-circle">Circle</label>
      <input type="radio" name="shape" id="shape-circle" value="circle" checked>
      <label for="shape-square">Square</label>
      <input type="radio" name="shape" id="shape-square" value="square">
      <label for="shape-pill">Pill</label>
      <input type="radio" name="shape" id="shape-pill" value="pill">
      <label for="shape-rectangle">Rectangle</label>
      <input type="radio" name="shape" id="shape-rectangle" value="rectangle">
    </div>
  </div>
  <div class="toggle-wrap">
    <h3>3.) Costumizalo</h3>
    <div class="toggles">
      <label for="color">Shadow</label>
      <input class="toggle brand-toggle" type="checkbox" name="color" id="color">
      <label for="border">Border</label>
      <input class="toggle" type="checkbox" name="border" id="border">
      <label for="background-color">Background</label>
      <input class="toggle brand-toggle" type="checkbox" name="background-color" id="background-color" checked>
      <label for="background-image">Background Image</label>
      <input class="toggle brand-toggle" type="checkbox" name="background-image" id="background-image" checked>
    </div>
  </div>
  <div class="shape circle background jquery-ui"></div>
</div>

<p> Este componente JQuery deja tener varios radio buttons para poder escoger distintas opciones y a la ves edita la imagen.</p>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>