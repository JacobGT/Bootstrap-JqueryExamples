<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Categories Autocomplete</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <style>
  .ui-autocomplete-category {
    font-weight: bold;
    padding: .2em .4em;
    margin: .8em 0 .2em;
    line-height: 1.5;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $.widget( "custom.catcomplete", $.ui.autocomplete, {
      _create: function() {
        this._super();
        this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
      },
      _renderMenu: function( ul, items ) {
        var that = this,
          currentCategory = "";
        $.each( items, function( index, item ) {
          var li;
          if ( item.category != currentCategory ) {
            ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
            currentCategory = item.category;
          }
          li = that._renderItemData( ul, item );
          if ( item.category ) {
            li.attr( "aria-label", item.category + " : " + item.label );
          }
        });
      }
    });
    var data = [
       { label: "posicion en la bolsa de valores", category: "" },
      { label: "Rodrigo", category: "CEO" },
      { label: "Jacob", category: "CEO" },
      { label: "Splitgate", category: "" },
      { label: "Valorant", category: "" },
      { label: "cyber dagger", category: "Empresa" },
      { label: "Cyber Dagger", category: "Empresa" },
      { label: "anti-virus", category: "Productos" },
      { label: "vpn", category: "Productos" },
      { label: "componentes", category: "" },
      { label: "Bootstrap", category: "" },
      { label: "Jquery", category: "" },
      { label: "Historia de la compañia", category: "Historia" }
    ];
 
    $( "#search" ).catcomplete({
      delay: 0,
      source: data
    });
  } );
  </script>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Categories Autocomplete</h1>
       
    <label for="search">Buscar: </label>
<input id="search">

<p>Intenta buscar algo que empieza con 'a' o 'c'.</p>

<p>Este componente de JQuery es bueno para poder buscar algo en una pagina web. Este en especial puedes incluir cierta data para que se autocomplete tu busqueda.</p>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>