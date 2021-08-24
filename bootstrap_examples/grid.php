<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Grid</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/grid/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="grid.css" rel="stylesheet">

    </head>

    <body style="background-color: #ccffcc" class="py-4">
        <h1>Grid</h1>
       
    <main>
  <div class="container">

    <h1>Ejemplos del Grid en Bootstrap</h1>
    <p class="lead">El sistema de grid (cuadricula) de Bootstrap funciona con 12 columnas y numero indefinidos de filas.</p>
    <p>Veremos algunos ejemplos de como se usan y su funcionalidad del codigo: <code>.themed-grid-col</code>Texto alterno no se cambió para poder entender y comprender de una mejor manera.</p>

    <h2 class="mt-4">Los cinco niveles en el Grid</h2>
    <p>Existen cinco niveles dentro de los sistemas de Grid en Bootstrap, un nivel por cada rango de los dispositivos que se admiten. Cada nivel comienza con un tamaño minimo en el viewport (Punto de vista) y este se aplica automaticamente a dispositivos de mayor tamaño si estos no se sobrescriben..</p>

    <div class="row mb-3">
      <div class="col-4 themed-grid-col">.col-4</div>
      <div class="col-4 themed-grid-col">.col-4</div>
      <div class="col-4 themed-grid-col">.col-4</div>
    </div>

    <div class="row mb-3">
      <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
      <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
      <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
    </div>

    <div class="row mb-3">
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-4 themed-grid-col">.col-lg-4</div>
      <div class="col-lg-4 themed-grid-col">.col-lg-4</div>
      <div class="col-lg-4 themed-grid-col">.col-lg-4</div>
    </div>

    <div class="row mb-3">
      <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
      <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
      <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
    </div>

    <div class="row mb-3">
      <div class="col-xxl-4 themed-grid-col">.col-xxl-4</div>
      <div class="col-xxl-4 themed-grid-col">.col-xxl-4</div>
      <div class="col-xxl-4 themed-grid-col">.col-xxl-4</div>
    </div>

    <h2 class="mt-4">Tres columnas iguales</h2>
    <p>obtener 3 columnas con un ancho equitativo <strong> empezando con el escritotio y escalando hacia el largo del escritorio</strong>. En los dispositivos moviles, tabletas y otras, las columnas deben posicionarse autmaticamente.</p>
    <div class="row mb-3">
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
    </div>

    <h2 class="mt-4">Tres columnas iguales, forma alternativa</h2>
    <p>Usando las clases <code>.row-cols-*</code>, puedes facilmente crear un grid (cuadricula) igual que las columnas.</p>
    <div class="row row-cols-md-3 mb-3">
      <div class="col themed-grid-col"><code>.col</code> hijo de <code>.row-cols-md-3</code></div>
      <div class="col themed-grid-col"><code>.col</code> hijo de <code>.row-cols-md-3</code></div>
      <div class="col themed-grid-col"><code>.col</code> hijo de <code>.row-cols-md-3</code></div>
    </div>

    <h2 class="mt-4">Tres columnas desiguales</h2>
    <p>Obtener tres columnas<strong>que comiencen en computadores y se ajusten a computadoras de mayor tamaño.</strong> Recuerda, las columnas de la cuadrícula deben sumar doce para un solo bloque horizontal. Más que eso, las columnas comienzan a apilarse sin importar la ventana gráfica (vista).</p>
    <div class="row mb-3">
      <div class="col-md-3 themed-grid-col">.col-md-3</div>
      <div class="col-md-6 themed-grid-col">.col-md-6</div>
      <div class="col-md-3 themed-grid-col">.col-md-3</div>
    </div>

    <h2 class="mt-4">Dos columnas</h2>
    <p>Obtener dos columnas <strong>que comiencen en computadoras y se adapten a computadoras de mayor tamaño.</strong>.</p>
    <div class="row mb-3">
      <div class="col-md-8 themed-grid-col">.col-md-8</div>
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
    </div>

    <h2 class="mt-4">Ancho completo, una columna independiente</h2>
    <p class="text-warning">
      No se necesitan clases en el grid para obtener un ancho completo en los elementos existentes.
    </p>

    <hr class="my-4">

    <h2 class="mt-4">Dos columnas con dos columnas anidadas</h2>
    <p>Según la documentación, el anidamiento es fácil, simplemente coloque una fila de columnas dentro de una columna existente. Esto le da dos columnas <strong>empezando con el escritotio y escalando hacia el largo del escritorio</strong>, con otros dos (anchos iguales) dentro de la columna más grande.</p>
    <p>En los tamaños de dispositivos moviles, tabletas y otras, las columnas y sus columnas animadas puedan apilarse.</p>
    <div class="row mb-3">
      <div class="col-md-8 themed-grid-col">
        <div class="pb-3">
          .col-md-8
        </div>
        <div class="row">
          <div class="col-md-6 themed-grid-col">.col-md-6</div>
          <div class="col-md-6 themed-grid-col">.col-md-6</div>
        </div>
      </div>
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
    </div>

    <hr class="my-4">

    <h2 class="mt-4">Mixed: mobile and desktop</h2>
    <p>El Bootstrap v4 grid system (sistema de cuadricula) tiene cinco tipo de clases (five tiers of classes): xs (extra small, this class infix no se usa), sm (small), md (medium), lg (large), y xl (extra large). Se puede usar casí cualquier conbinacion de estas clases para crear layouts más dinamicos y flexibles.</p>
    <p>Cad tier de clases se escala a (scales up), que significa que si planeas poner el mismo ancho para md, lg y xl, solo tienes que escpecificar md.</p>
    <div class="row mb-3">
      <div class="col-md-8 themed-grid-col">.col-md-8</div>
      <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
    </div>
    <div class="row mb-3">
      <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
      <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
      <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
    </div>
    <div class="row mb-3">
      <div class="col-6 themed-grid-col">.col-6</div>
      <div class="col-6 themed-grid-col">.col-6</div>
    </div>

    <hr class="my-4">

    <h2 class="mt-4">Mixed: mobile, tablet, and desktop</h2>
    <div class="row mb-3">
      <div class="col-sm-6 col-lg-8 themed-grid-col">.col-sm-6 .col-lg-8</div>
      <div class="col-6 col-lg-4 themed-grid-col">.col-6 .col-lg-4</div>
    </div>
    <div class="row mb-3">
      <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
      <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
      <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
    </div>

    <hr class="my-4">

    <h2 class="mt-4">Gutters (Canales)</h2>
    <p>Con el codigo: <code>.gx-*</code> clases se pueden ajustar los gutters horizontales.</p>
    <div class="row row-cols-1 row-cols-md-3 gx-4">
      <div class="col themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
    </div>
    <p class="mt-4">Use the <code>.gy-*</code> classes to control the vertical gutters.</p>
    <div class="row row-cols-1 row-cols-md-3 gy-4">
      <div class="col themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
    </div>
    <p class="mt-4">With <code>.g-*</code> classes, the gutters in both directions can be adjusted.</p>
    <div class="row row-cols-1 row-cols-md-3 g-3">
      <div class="col themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
    </div>
  </div>

  <div class="container" id="containers">
    <hr class="my-4">

    <h2 class="mt-4">Contenedores</h2>
    <p>Clases adicionales agregadas en Bootstrap v4.4 admite contenedores que sean anchos a un 100% (100% wide) hasta un punto de quiebre (breakpoint). Sin embargo la v5 agrega nuevos <code>xxl</code> breakpoint (punto de quiebre).</p>
  </div>

  <div class="container themed-container">.container</div>
  <div class="container-sm themed-container">.container-sm</div>
  <div class="container-md themed-container">.container-md</div>
  <div class="container-lg themed-container">.container-lg</div>
  <div class="container-xl themed-container">.container-xl</div>
  <div class="container-xxl themed-container">.container-xxl</div>
  <div class="container-fluid themed-container">.container-fluid</div>
</main>
    
    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>