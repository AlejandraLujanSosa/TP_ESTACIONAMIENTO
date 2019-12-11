<?php

session_start();
 include('../headers/Header.php'); 
include '../DB/AccesoDatos.php';

$query =$BaseDeDatos->prepare("select nombre ,clave,admin from Usuarios");
$query->execute();     
$datos= $query->fetchAll(PDO::FETCH_ASSOC); 


      foreach ($datos as $usuarios) 
      {
         if ($usuarios['nombre'] == $_GET['Usuario'])    
            {
                if ($usuarios['clave'] == $_GET['Clave'])
                    {
                        $_SESSION['usuario']=$usuarios['nombre'];
                        $_SESSION['admin']=$usuarios['admin'];
                        header("Location: TP_ESTACIONAMIENTO\paginas\LoginOk.php?admin=".$usuarios['admin']);
                        exit;
                    } 
                else
                    {
                      echo "Fallo clave";
                     header("Location: TP_ESTACIONAMIENTO\paginas\LoginNoOK.php");
                     exit;

                    }
        
            }
          else
            {
            header("Location: TP_ESTACIONAMIENTO\paginas\UsuarioInexistente.php");
          }  
       } 
    
  
  


  

?>