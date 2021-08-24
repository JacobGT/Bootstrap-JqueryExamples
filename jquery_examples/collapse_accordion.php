<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Collapse Accordion</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
  </script>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Collapse Accordion</h1>
       
    <div id="accordion">
  <h3>Componente</h3>
  <div>
    <p>Este es un componente de JQuery, es como un menú pero es colapsable con animacion, es util para presentar distintas secciones de informacion o distintos temas.</p>
  </div>
  <h3>Cyber Dagger</h3>
  <div>
    <p>Lo que dicen nuestros usuarios:</p>
    <ul>
      <li>Google: Estamos apunto de cerrar un trato para que podamos usar sus productos. 10/10</li>
      <li>El perro de Jacob: guau wow 20/10</li>
      <li>Papa de Sammuy: Y eso te va a generar ingresos? 8/10 </li>
      <li>Vecina de Diego: Que bonita pagina, osea que eres hacker. Podes hackear el instagram de mi ex? 10/10</li>
    </ul>
  </div>
  <h3>Equipo</h3>
  <div>
    <p>Talvez no seamos un grán grupo de desarrolladores y developers, pero damos lo máximo de nosotros para que nuestros programas y proyectos sean los mejores para satisfacer las espectativas de nuestros clientes y futuros clientes. Los integrantes de nuestro grupo son:</p>
    <ul>
      <li>Jacob Flores</li>
      <li>Rodrigo Leon</li>
      <li>Diego Calderon</li>
      <li>Sammy Alvarado</li>
    </ul>
  </div>
  <h3>Más informacion</h3>
  <div>
    <p>Si quieres seguir viendo más componentes de Bootstrap y JQuery te invitamos a que sigas viendo nuestra pagina web y que pruebes todos los botones y opciones que hay.</p><p>Esta es unicamente una version beta y muy pronto será una pagina web completa de la empresa Cyber Dagger Co.</p>
  </div>
</div>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>