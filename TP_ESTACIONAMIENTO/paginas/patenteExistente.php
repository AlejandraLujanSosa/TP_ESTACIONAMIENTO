<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="TP_ESTACIONAMIENTO/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="TP_ESTACIONAMIENTO/css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="TP_ESTACIONAMIENTO/css/floating-labels.css" rel="stylesheet">

  </head>



      <style>
body {
  background-image: url('parking.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>

  <body>

    

    <!-- Begin page content -->
    <main role="main" class="container">
         
       
       <div align="center"><h1>Patente Existente</h1>
        
         <div align="center"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6KG3rL4NFulzvPe7Aq--aLBQZxJdIfmfQfnQRqkhFYWNhMqQ&s">
        <br>
        
          <div align="center"><h1>Acceso a Facturación</h1>
          <div align="center"><a href="../funciones/HacerFacturar.php"><h2>Facturar</h2></a>

          <div align="center"><h1>Ingresar Nueva Patente</h1>
          <div align="center"><a href="../paginas/IngresoVehiculo.php"><h2>Ingresar</h2></a>

    </main>
      
    <footer class="footer">
    <?php
        //include "componentes/pie.php";
    ?>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cAlumnorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>