<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Open on Mouse Over Tabs</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs({
      event: "mouseover"
    });
  } );
  </script>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Open on Mouse Over Tabs</h1>
       
    <div id="tabs">
  <ul>
    <li><a href="#tabs-1">Equipo</a></li>
    <li><a href="#tabs-2">Cyber Dagger</a></li>
    <li><a href="#tabs-3">Informacion</a></li>
  </ul>
  <div id="tabs-1">
    <p>Talvez no seamos un grán grupo de desarrolladores y developers, pero damos lo máximo de nosotros para que nuestros programas y proyectos sean los mejores para satisfacer las espectativas de nuestros clientes y futuros clientes. Los integrantes de nuestro grupo son:</p>
    <ul>
      <li>Jacob Flores</li>
      <li>Rodrigo Leon</li>
      <li>Diego Calderon</li>
      <li>Sammy Alvarado</li>
    </ul>
  </div>
  <div id="tabs-2">
        <p>Recomendaciones de nuestros usuarios:</p>
        <p> <ul>
      <li>Los mejores productos de cyber seguridad 10/10 -CNet</li>
      <li>Si ya, muy bonito. Ya baja a comer, hombre! y anda a traer tortillas y un agua 10/10 -Mama de Jacob</li>
      <li>Y eso para que es? Ahhhh ya. Mijo, poneme el Neflis 15/10 -Abuela de Sammy</li>
      <li>jajajajaj he visto mejores paginas web y más bonitas -5/10 -Hermana de Rodrigo</li>
    </ul></p>

  </div>
  <div id="tabs-3">
    <p>Este componenete de JQuery permite que las pestañas se abrán automaticamente no más el usuario ponga su mouse encima de la pestaña deseada.</p><p>Si quieres seguir viendo más componentes de Bootstrap y JQuery te invitamos a que sigas viendo nuestra pagina web y que pruebes todos los botones y opciones que hay.</p><p>Esta es unicamente una version beta y muy pronto será una pagina web completa de la empresa Cyber Dagger Co.</p>
  </div>
</div>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>