<?php 
session_start();

 ?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.lincoln-offices.com/wp-content/uploads/2019/06/estacionamiento.png">
    <title>ESTACIONAMIENTO</title>
    <!-- Custom styles for this template -->
    <link href="/TP_ESTACIONAMIENTO/ccs/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/TP_ESTACIONAMIENTO/ccs/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body background="https://media.istockphoto.com/photos/grey-gradient-abstract-background-for-background-or-wallpaper-your-picture-id853598200?k=6&m=853598200&s=170667a&w=0&h=zefhWQKtIKaiz2O5lr1NR704N8XVDugKutllNfyvm2g=">



    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/paginas/Registro.php">Registrarse</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/paginas/Login.php">Login</a>
            </li>
            <?php 
                if (isset($_SESSION['usuario'])==1):

             ?>
            <li class="nav-item active">
              <a class="nav-link" href="/paginas/IngresoVehiculo.php">Check-IN</a>
            </li>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/paginas/Facturar.php">Check Out</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/funciones/LeerVehiculos.php">Listar Vehiculos</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/funciones/HacerLogout.php">Log-Out</a>
            </li> 
            <li class="nav-item active">
              <a class="nav-link"> Usuario:<?php print_r($_SESSION['usuario']) ; ?></a>
            </li>
            <?php endif;  ?>
            <?php 
                if ((isset($_SESSION['usuario'])==1) && ($_SESSION['admin'] == 1)):
            ?>
            <li class="nav-item active">
              <a class="nav-link" href="/funciones/LeerFacturados.php">Facturados</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/funciones/LeerUsuarios.php">Usuarios</a>
            </li>

             <?php endif;  ?>         
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>

          
          
        </div>
      </nav>
    </header>
</html>
