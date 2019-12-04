<?php

session_start();


$bandera=0;

include '../AccesoDatos.php';
$archivo=fopen('../archivos/VehiculosIngresos.txt','r');
date_default_timezone_set("America/Argentina/Buenos_Aires");
$Objeto=new stdClass();
$HoraSalida=mktime();
$FechaSalida=date("d-m-y H:i:s");

$query =$BaseDeDatos->prepare("select patente ,hora_ingreso from Vehiculos");
$query->execute();     
$datos= $query->fetchAll(PDO::FETCH_ASSOC); 

foreach ($datos as $vehiculos) 
{
    if ($vehiculos['patente'] == $_GET['Patente'])    
      {
        $bandera=1;  
        
          $HoraEntrada = $vehiculos['hora_ingreso'];
          $FechaEntrada = Date("d-m-yyyy H:i:s",$vehiculos['hora_ingreso']);
          
          

          $Diff = $HoraSalida - $HoraEntrada;
    $PMin=0;
    $Pseg=0;


          if ($Diff >3600)
              {
                  $PHora = ($Diff/3600);
              }
              else
              {
                  if ($Diff > 60)
                  {
                    $PMin = (($Diff/60)*60);
                  }
                  else
                  {
                    $Pseg = (($Diff/1)*40);
                  }

              }



          $PrecioFinal = $PHora + $PMin + $Pseg;

          $Objeto->Precio = $PrecioFinal;
          $Objeto->FechaEntrada = $FechaEntrada;
          $Objeto->FechaSalida = $FechaSalida;
          $Objeto->Patente=$_GET['Patente'];


$query =$BaseDeDatos->prepare("insert into facturados (patente,fecha_ingreso,fecha_salida,importe) values ('$Objeto->Patente','$Objeto->FechaEntrada','$Objeto->FechaSalida','$Objeto->Precio')");
$query->execute();    
          
          header("location:../paginas/FacturarOK.php?Precio=$Objeto->Precio&FechaEntrada=$Objeto->FechaEntrada&Patente=".$vehiculos['patente']."&FechaSalida=$Objeto->FechaSalida");   

  
        }  
  
   
  } 
  if ($bandera==0)
{
  header("Location: ../paginas/patenteNoLocalizada.php");
  exit();
}

//fclose($archivo);

?>


?>