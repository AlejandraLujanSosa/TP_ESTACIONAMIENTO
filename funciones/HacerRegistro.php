<?php
//echo "hola";
//
session_start();
 include('../headers/Header.php'); 
 include 'AccesoDatos.php';

$miobjeto = new stdClass();
$miobjeto->Usuario=$_GET['Usuario'];
$miobjeto->Clave=$_GET['Clave'];
var_dump($miobjeto);
die();
$query =$BaseDeDatos->prepare("INSERT INTO Usuarios (nombre,clave) VALUES ('$miobjeto->Usuario','$miobjeto->Clave')");
$query->execute();	

header("Location:../paginas/RegistroOK.php");
?>