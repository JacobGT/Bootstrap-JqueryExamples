<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Sign In</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

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
    <link href="signin.css" rel="stylesheet">

    </head>
    <body style="background-color: #ccffcc" class="text-center">
       
   <main class="form-signin">
  <form>
    <img class="mb-4" src="images/logo_background.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Iniciar Sesion</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="ejemplo@correo.com">
      <label for="floatingInput">Correo Electronico</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recordarme
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar Sesion</button>
    <p class="mt-5 mb-3 text-muted">&copy; Cyber Dagger 2021 <p><a href="../index.php"> Home</a></p></p>
  </form>
</main>
    </body>
</html>