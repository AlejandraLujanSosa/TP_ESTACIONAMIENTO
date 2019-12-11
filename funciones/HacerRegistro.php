<?php
echo "hola";
die();
session_start();
 include('../headers/Header.php'); 
include '../DB/AccesoDatos.php';

$miobjeto = new stdClass();
$miobjeto->Usuario=$_GET['Usuario'];
$miobjeto->Clave=$_GET['Clave'];
var_dump($miobjeto);

$query =$BaseDeDatos->prepare("INSERT INTO Usuarios (nombre,clave) VALUES ('$miobjeto->Usuario','$miobjeto->Clave')");
$query->execute();	

header("Location:../paginas/RegistroOK.php");
?>