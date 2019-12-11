<!doctype html>
<html lang="es">
  <head>
   

    <title>Login</title>

    <?php 
    session_start();
    include('../headers/Header.php'); 
    include '../DB/AccesoDatos.php';
            
     ?>


    </head>

    <body 
    background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuxS8enFJl3D437JId2eMMF4YRkQ4XQiTk9OWbiOFyEYuJ0W6u&s">

      <h1 align="center">Login<h1>
        <br>        
          <form action="../funciones/HacerLogin.php" class="text-center">
                <p align= "center">Usuario</p>
                <input type="text" name="Usuario" value="" placeholder="Ingrese su usuario aqui">
                <p align="center">Clave</p>
                <input align="center" type="Clave" name="Clave" value="" placeholder="Ingrese su clave aqui">
                <br><br>
                <input align="center" type="submit" value="Ingresar">
          </form> 
    </main>

  
    
  </body>
</html>
