<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Dashboard</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

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

    <script type="text/javascript">
    function info(){
      window.alert("El Dashboard es parte de Bootstrap que se puede usar como vista de administrador u otro. Es muy util para mostrar informacion como gráficas y tablas.");
    }
    </script>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    </head>
    <body style="background-color: #ccffcc">       
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Cyber Dagger</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Buscar">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Ordenes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Productos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Clientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reportes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integraciones
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Reportes Guardados</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Este mes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="info()">
              <span data-feather="file-text"></span>
              Informacion del Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Ventas de fin de año
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">
              <span data-feather="file-text"></span>
              Ir a Inicio
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Esta Semana
          </button>
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      <h2>Informacion</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Ventas</th>
              <th scope="col">Recuadado</th>
              <th scope="col">Comisiones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Rodrigo Leon</td>
              <td>50</td>
              <td>Q500,000</td>
              <td>Q100,000</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jacob Flores</td>
              <td>49</td>
              <td>Q490,000</td>
              <td>Q98,000</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Elvis Teck</td>
              <td>30</td>
              <td>Q300,000</td>
              <td>Q15,000</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Elva Balazo</td>
              <td>25</td>
              <td>Q250,000</td>
              <td>Q12,500</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Alan Brito</td>
              <td>23</td>
              <td>Q230,000</td>
              <td>Q11,500</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Elsa Pato</td>
              <td>20</td>
              <td>Q200,000</td>
              <td>Q10,000</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Elba Surita</td>
              <td>18</td>
              <td>Q180,000</td>
              <td>Q9,000</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Mario Neta</td>
              <td>17</td>
              <td>Q170,000</td>
              <td>Q8,500</td>
            </tr>
            <tr>
              <td>9</td>
              <td>Marcia Ana</td>
              <td>15</td>
              <td>Q150,000</td>
              <td>Q7,500</td>
            </tr>
            <tr>
              <td>10</td>
              <td>Analisa Dora</td>
              <td>13</td>
              <td>Q130,000</td>
              <td>Q6,500</td>
            </tr>
            <tr>
              <td>11</td>
              <td>Susana Distancia</td>
              <td>11</td>
              <td>Q110,000</td>
              <td>Q5,500</td>
            </tr>
            <tr>
              <td>12</td>
              <td>Andrea Sanchineli</td>
              <td>10</td>
              <td>Q100,000</td>
              <td>Q5,000</td>
            </tr>
            <tr>
              <td>13</td>
              <td>Zoila Zana Horia</td>
              <td>9</td>
              <td>Q90,000</td>
              <td>Q4,500</td>
            </tr>
            <tr>
              <td>14</td>
              <td>Elbi Gotes</td>
              <td>5</td>
              <td>Q50,000</td>
              <td>Q2,500</td>
            </tr>
            <tr>
              <td>15</td>
              <td>Diego Calderon</td>
              <td>3</td>
              <td>Q30,000</td>
              <td>Q3,000</td>
            </tr>
            <tr>
              <td>16</td>
              <td>Samatha González</td>
              <td>1</td>
              <td>Q10,000</td>
              <td>Q5,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    </body>
</html>