<?php

session_start();
include '../DB/AccesoDatos.php';

$miobjeto = new stdClass();
$miobjeto->Usuario=$_GET['Usuario'];
$miobjeto->Clave=$_GET['Clave'];

$query =$BaseDeDatos->prepare("INSERT INTO Usuarios (nombre,clave) VALUES ('$miobjeto->Usuario','$miobjeto->Clave')");
$query->execute();	

header("Location:TP_ESTACIONAMIENTO\paginas\RegistroOK.php");
?>