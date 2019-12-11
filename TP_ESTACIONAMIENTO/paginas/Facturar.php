<!DOCTYPE html>
<html>

<head>
    <title>Facturacion</title>

    <?php include('../headers/Header.php'); 
            
     ?>
  </head>

  <body background="https://media.istockphoto.com/photos/grey-gradient-abstract-background-for-background-or-wallpaper-your-picture-id853598200?k=6&m=853598200&s=170667a&w=0&h=zefhWQKtIKaiz2O5lr1NR704N8XVDugKutllNfyvm2g=">

  <main role="main" class="container">
      
      <h1 align="center">CHECK OUT<h1>
        <br>

         <form action="../funciones/HacerFacturar.php" class="text-center">
                <p align= "center">Patente</p>
                <input type="text" name="Patente" value="" text-align="center">
                <br><br>
                <input align="center" type="submit" value="Ingresar">
          </form> 
    </main>
  </body>
</html>
