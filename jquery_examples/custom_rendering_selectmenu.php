<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Custom Rendering Select Menu</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $.widget( "custom.iconselectmenu", $.ui.selectmenu, {
      _renderItem: function( ul, item ) {
        var li = $( "<li>" ),
          wrapper = $( "<div>", { text: item.label } );
 
        if ( item.disabled ) {
          li.addClass( "ui-state-disabled" );
        }
 
        $( "<span>", {
          style: item.element.attr( "data-style" ),
          "class": "ui-icon " + item.element.attr( "data-class" )
        })
          .appendTo( wrapper );
 
        return li.append( wrapper ).appendTo( ul );
      }
    });
 
    $( "#filesA" )
      .iconselectmenu()
      .iconselectmenu( "menuWidget" )
        .addClass( "ui-menu-icons" );
 
    $( "#filesB" )
      .iconselectmenu()
      .iconselectmenu( "menuWidget" )
        .addClass( "ui-menu-icons customicons" );
 
    $( "#people" )
      .iconselectmenu()
      .iconselectmenu( "menuWidget")
        .addClass( "ui-menu-icons avatar" );
  } );
  </script>
  <style>
    h2 {
      margin: 30px 0 0 0;
    }
    fieldset {
      border: 0;
    }
    label {
      display: block;
    }
 
    /* select with custom icons */
    .ui-selectmenu-menu .ui-menu.customicons .ui-menu-item-wrapper {
      padding: 0.5em 0 0.5em 3em;
    }
    .ui-selectmenu-menu .ui-menu.customicons .ui-menu-item .ui-icon {
      height: 24px;
      width: 24px;
      top: 0.1em;
    }
    .ui-icon.video {
      background: url("images/no_background_logo.png") 0 0 no-repeat;
    }
    .ui-icon.podcast {
      background: url("images/no_background_logo.png") 0 0 no-repeat;
    }
    .ui-icon.rss {
      background: url("images/no_background_logo.png") 0 0 no-repeat;
    }
 
    /* select with CSS avatar icons */
    option.avatar {
      background-repeat: no-repeat !important;
      padding-left: 20px;
    }
    .avatar .ui-icon {
      background-position: left top;
    }
  </style>
    </head>
    <body style="background-color: #ccffcc">
        <h1>Custom Rendering Select Menu</h1>
       
   <div class="demo">
 
<form action="#">
  <h2>Componente JQuery Con Distintas Opciones</h2>
  <fieldset>
    <label for="filesA">Escoge uno:</label>
    <select name="filesA" id="filesA">
      <option value="asus" data-class="ui-icon-script">ASUS</option>
      <option value="dell" data-class="ui-icon-image">DELL</option>
      <option value="acer" data-class="ui-icon-script">ACER</option>
      <option value="hp" selected="selected" data-class="ui-icon-image">HP</option>
      <option value="lenovo" disabled="disabled" data-class="ui-icon-help">LENOVO</option>
    </select>
  </fieldset>
 
  <h2>Equipo de Cyber Dagger</h2>
  <fieldset>
    <label for="filesB">Escoge al integrante</label>
    <select name="filesB" id="filesB">
      <option value="rodrigo" data-class="podcast">Rodrigo León</option>
      <option value="jacob" selected="selected" data-class="video">Jacob Flores</option>
      <option value="diego" data-class="rss">Diego Calderon</option>
      <option value="sammy" data-class="rss">Samatha Gonzales</option>
    </select>
  </fieldset>
 
  <h2>Puedes incluir texto, iconos, imagenes o nada.</h2>
  <fieldset>
    <label for="people">Escoge uno:</label>
    <select name="people" id="people">
      <option value="1" data-class="avatar" data-style="background-image: url(&apos;http://www.gravatar.com/avatar/b3e04a46e85ad3e165d66f5d927eb609?d=monsterid&amp;r=g&amp;s=16&apos;);">PC Master Race</option>
      <option value="2" data-class="avatar" data-style="background-image: url(&apos;http://www.gravatar.com/avatar/e42b1e5c7cfd2be0933e696e292a4d5f?d=monsterid&amp;r=g&amp;s=16&apos;);">XBox</option>
      <option value="3" data-class="avatar" data-style="background-image: url(&apos;http://www.gravatar.com/avatar/bdeaec11dd663f26fa58ced0eb7facc8?d=monsterid&amp;r=g&amp;s=16&apos;);">Play Station</option>
    </select>
  </fieldset>
</form>
 
</div>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>