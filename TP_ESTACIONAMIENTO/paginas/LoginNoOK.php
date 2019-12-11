<!DOCTYPE html>
<html>

<head>
    <title>Error</title>

   <?php 
   session_start();
  include('../headers/Header.php'); 
  include '../DB/AccesoDatos.php'; 
            
     ?>
  </head>

  <body>

    <!-- Begin page content -->
    <main role="main" class="container" >
      <h1 align="center">Su clave es incorrecta</h1>
      <center>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSX3044RyDIslojhde4YwGL8sLqKvm2MNIBp-Ihf0Un2MKU1swfAg&s">
      </center>
      <p class="lead">Usuario o clave Incorrecto. Vuelva a intentarlo</code>.</p>
    </main>
  </body>
</html>
