<?php

session_start();
include '../AccesoDatos.php';

$miobjeto = new stdClass();
$miobjeto->Usuario=$_GET['Usuario'];
$miobjeto->Clave=$_GET['Clave'];

$query =$BaseDeDatos->prepare("INSERT INTO Usuarios (nombre,clave) VALUES ('$miobjeto->Usuario','$miobjeto->Clave')");
$query->execute();	

header("Location:..\paginas\RegistroOK.php");
?>