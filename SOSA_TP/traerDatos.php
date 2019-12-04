<?php
include 'AccesoDatos.php';
	session_start();
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select nombre as name, clave as paswsword from usuario");
			$consulta->execute();			
			$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);		
			//var_dump($datos);
			foreach($datos as $usuario);
			(
				vard_dump($usuario);
				echo"<br)";
			)
	
?>