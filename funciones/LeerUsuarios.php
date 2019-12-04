<!DOCTYPE html>
<html>
<head>
    
    <title>Usuarios</title>

    <?php 
    include('../headers/Header.php'); 
    include ('../AccesoDatos.php'); 
    ?>

    </head>

    <body 
    background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuxS8enFJl3D437JId2eMMF4YRkQ4XQiTk9OWbiOFyEYuJ0W6u&s">


    
    <main role="main" class="container">
      <h2 class="mt-5">Lista de usuarios</h2>
		<table border="2">
          <tr>
            <th>Patente</th>
            <th>Admin</th>
          </tr>
      <?php  
      $query =$BaseDeDatos->prepare("SELECT nombre,admin FROM Usuarios");
      $query->execute();     
      $datos= $query->fetchAll(PDO::FETCH_ASSOC); 


        foreach ($datos as $usuarios):?>
          
          <tr>
            <td><?php echo $usuarios['nombre']; ?></td>
            <td><?php echo $usuarios['admin']; ?></td>
            <?php endforeach;  ?>
          </tr>
            
          </table>
        
    </ul> 
    </main>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="popper.min.js"></script>

</body>
</html>