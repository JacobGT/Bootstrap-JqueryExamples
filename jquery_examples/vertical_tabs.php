<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Vertical Tabs</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  } );
  </script>
  <style>
  .ui-tabs-vertical { width: 55em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
  </style>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Vertical Tabs</h1>
       
   <div id="tabs">
  <ul>
    <li><a href="#tabs-1">Equipo</a></li>
    <li><a href="#tabs-2">Cyber Dagger</a></li>
    <li><a href="#tabs-3">Informacion</a></li>
  </ul>
  <div id="tabs-1">
    <h2>Equipo</h2>
    <p>Talvez no seamos un grán grupo de desarrolladores y developers, pero damos lo máximo de nosotros para que nuestros programas y proyectos sean los mejores para satisfacer las espectativas de nuestros clientes y futuros clientes. Los integrantes de nuestro grupo son:</p>
    <ul>
      <li>Jacob Flores</li>
      <li>Rodrigo Leon</li>
      <li>Diego Calderon</li>
      <li>Sammy Alvarado</li>
    </ul>
  </div>
  <div id="tabs-2">
    <h2> Cyber Dagger</h2>
    <p>Somos de las mejores empresas. Pero no dejes que nosotros te lo digamos, escucha lo que dicen nuestros clientes:</p>
    <ul>
      <li>Linus TechTips: Ya era hora de tener buenos productos y servicios a un buen precio.</li>
      <li>Hermana de Diego: Si lo compro y digo que está bonito y me encanta me dejás de molestar?</li>
      <li>Hermano de Jacob: Por que el fondo verde?</li>
    </ul>
  </div>
  <div id="tabs-3">
    <h2>Más informacion</h2>
    <p>Este componenete de JQuery permite poner tabs de forma vertical. Es decir primero se mostrarasn los nombres de las pestañas y el usuario puede hacer click en ellas para ver la informacion.</p><p>Si quieres seguir viendo más componentes de Bootstrap y JQuery te invitamos a que sigas viendo nuestra pagina web y que pruebes todos los botones y opciones que hay.</p><p>Esta es unicamente una version beta y muy pronto será una pagina web completa de la empresa Cyber Dagger Co.</p>
  </div>
</div>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>