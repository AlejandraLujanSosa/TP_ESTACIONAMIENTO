<!DOCTYPE html>
<html>

<head>
    <title>Facturacion</title>

     <?php include('../headers/Header.php'); 
            
     ?>
  </head>

  <body>

    <!-- Begin page content -->
    <main role="main" class="container" >
      <h1 align="center">Debe Abonar</h1>
     <h2 align="center"> 
      <?php 
        echo $_GET['Precio']," $";

        $miobjeto=new stdClass();
        $miobjeto->Patente=$_GET['Patente'];
        $miobjeto->FechaEntrada=$_GET['FechaEntrada'];
        $miobjeto->FechaSalida=$_GET['FechaSalida'];
        $miobjeto->Precio=$_GET['Precio'];        

        $archivo=fopen('TP_ESTACIONAMIENTO/archivos/VehiculosFacturados.txt','a')or die ();
        fwrite($archivo,json_encode($miobjeto)."\n");
        fclose($archivo);

       ?>
     </h2>
      <p align="center" class="lead">Gracias por confiar en nosotros</code>.</p>
    </main>
  </body>
</html>
