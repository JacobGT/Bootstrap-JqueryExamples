<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Drop Downs</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
 <!-- Custom styles for this template -->
    <link href="features.css" rel="stylesheet">
    <script type="javascript" src="bootstrap.bundle.min.js"></script>
    <script type="javascript" src="bootstrap.bundle.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    </head>


    <body style="background-color: #ccffcc">
        <h1>Drop Downs</h1>

        <!-- Primary -->
        <div class="dropdown">
<div class="btn-group">
  <button
    type="button"
    class="btn btn-primary dropdown-toggle"
    data-bs-toggle="dropdown"
    aria-expanded="false"
  >
    Productos
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Anti-Virus</a></li>
    <li><a class="dropdown-item" href="#">VPN</a></li>
    <li><a class="dropdown-item" href="#">Password Manager</a></li>
    <li>
      <hr class="dropdown-divider" />
    </li>
    <li><a class="dropdown-item" href="#">Anti-Cheats</a></li>
  </ul>
</div>

<!-- Secondary -->
<div class="btn-group">
  <button
    type="button"
    class="btn btn-primary dropdown-toggle"
    data-bs-toggle="dropdown"
    aria-expanded="false"
  >
    Nuestro Equipo
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="https://www.instagram.com/lambartt_off/" target="_blank">Rodrigo Leon</a></li>
    <li><a class="dropdown-item" href="https://www.instagram.com/jacob_fr_gt/" target="_blank">Jacob Flores</a></li>
    <li><a class="dropdown-item" href="#">Diego Calderon</a></li>
    <li>
      <hr class="dropdown-divider" />
    </li>
    <li><a class="dropdown-item" href="#">Sammy Alvarado</a></li>

  </ul>
</div>

<!-- Success -->
<div class="btn-group">
  <button
    type="button"
    class="btn btn-success dropdown-toggle"
    data-bs-toggle="dropdown"
    aria-expanded="false"
  >
    Contacto
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Twitter: @Cyber_Dagger</a></li>
    <li><a class="dropdown-item" href="#">Facebook: @Cyber_Dagger</a></li>
    <li><a class="dropdown-item" href="#">Instagram: @Cyber_Dagger</a></li>
    <li>
      <hr class="dropdown-divider" />
    </li>
    <li><a class="dropdown-item" href="mailto:info@cyber_dagger.com.gt">Correo</a></li>
  </ul>
</div>

<!-- Info -->
<div class="btn-group">
  <button
    type="button"
    class="btn btn-info dropdown-toggle"
    data-bs-toggle="dropdown"
    aria-expanded="false"
  >
    Localizaciones
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Central: Guatemala</a></li>
    <li><a class="dropdown-item" href="#">Cede: Estados Unidos</a></li>
    <li><a class="dropdown-item" href="#">Cede: Russia</a></li>
    <li>
      <hr class="dropdown-divider" />
    </li>
    <li><a class="dropdown-item" href="#">Cede: Israel</a></li>
  </ul>
</div>

<!-- Warning -->
<div class="btn-group">
  <button
    type="button"
    class="btn btn-warning dropdown-toggle"
    data-bs-toggle="dropdown"
    aria-expanded="false"
  >
    Extensiones
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Numero Central: 5555-5555</a></li>
    <li><a class="dropdown-item" href="#">Atencion al Cliente: ext. 50</a></li>
    <li><a class="dropdown-item" href="#">Ventas: ext. 55</a></li>
    <li>
      <hr class="dropdown-divider" />
    </li>
    <li><a class="dropdown-item" href="#">Contratacion: ext. 60</a></li>
  </ul>
</div>

<!-- Danger -->
<div class="btn-group">
  <button
    type="button"
    class="btn btn-danger dropdown-toggle"
    data-bs-toggle="dropdown"
    aria-expanded="false"
  >
    Contratacion
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Ingenierios en Sistemas</a></li>
    <li><a class="dropdown-item" href="#">Ingenieros en Informatica</a></li>
    <li><a class="dropdown-item" href="#">Ingenieros Electricos</a></li>
    <li>
      <hr class="dropdown-divider" />
    </li>
    <li><a class="dropdown-item" href="#">Ingenieros Civiles</a></li>
  </ul>
</div>

<!-- Danger -->
<div class="btn-group">
  <button
    type="button"
    class="btn btn-danger dropdown-toggle"
    data-bs-toggle="dropdown"
    aria-expanded="false"
  >
    Horario de Trabajo Normal
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Lunes a Viernes</a></li>
    <li>
      <hr class="dropdown-divider" />
    </li>
    <li><a class="dropdown-item" href="#">7:00 AM -  7:00 PM</a></li>
  </ul>
</div>

<!-- Dark -->
<div class="btn-group">
  <button
    type="button"
    class="btn btn-dark dropdown-toggle"
    data-bs-toggle="dropdown"
    aria-expanded="false"
  >
    Horario de Trabajo Fin de Semana
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Sabado & Domingo</a></li>
    <li>
      <hr class="dropdown-divider" />
    </li>
    <li><a class="dropdown-item" href="#">9:00AM - 5:00PM</a></li>
  </ul>
</div>

<!-- Light -->
<div class="btn-group shadow-0">
  <button
    type="button"
    class="btn btn-light dropdown-toggle"
    data-bs-toggle="dropdown"
    aria-expanded="false"
  >
    Horario días Festivos
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Días Festivos</a></li>
    <li>
      <hr class="dropdown-divider" />
    </li>
    <li><a class="dropdown-item" href="#">9:00AM - 5:00PM</a></li>
  </ul>
</div>

<!-- Link -->
<div class="btn-group shadow-0">
  <button
    type="button"
    class="btn btn-link dropdown-toggle"
    data-bs-toggle="dropdown"
    aria-expanded="false"
  >
    Comunidad
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Foro</a></li>
    <li><a class="dropdown-item" href="#">Perfiles</a></li>
    <li><a class="dropdown-item" href="#">Actualizaciones</a></li>
    <li>
      <hr class="dropdown-divider" />
    </li>
    <li><a class="dropdown-item" href="#">Más Informacion</a></li>
  </ul>
</div>
</div>
<div class="dropdown">
	  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
		Soporte
	  </button>
	  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
		<li><a class="dropdown-item" href="#">Preguntas Frecuentes</a></li>
		<li><a class="dropdown-item" href="#">Problemas de Servidores</a></li>
		<li><a class="dropdown-item" href="#">Problemas de Productos</a></li>
	  </ul>
	</div>

  <p>El Drop Down es un componenete de Bootstrap que simula el uso desplegado de un menú (boton) que muestra distintas opciones a la hora que el usuario haga click en ellos.</p>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>