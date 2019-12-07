<?php 

$conexion = mysqli_connect('localhost', 'root', '') or die('No se pudo conectar a la base de datos');

mysqli_select_db($conexion,'empleados');

$resultados = mysqli_query($conexion,'SELECT * FROM empleados');
// Podemos ejecutar cualquier consulta SQL, por ejemplo para ingresar usuarios en una base de datos.
echo "<table border='2'>";
echo "<tr>";
echo "<th>nro_empleado</th>";
echo "<th>apellido</th>";
echo "<th>nombre</th>";
echo "<th>f_nacimiento</th>";
echo "<th>edad</th>";
echo "<th>dni</th>";
echo "<th>f_ingreso</th>";
echo "<th>p_trabajo</th>";
echo "<th>sueldo</th>";
echo "<th>estado_civil</th>";
echo "</tr>";



while($fila = mysqli_fetch_array($resultados)){
	
	echo "<tr>";
	echo "<td>";
	echo $fila['nro_empleado'];
	echo "</td>";
	echo"<td>";
	echo $fila['apellido'];
	echo "</td>";
	echo"<td>";
	echo $fila['nombre'];
	echo "</td>";
	echo"<td>";
	echo $fila['f_nacimiento'];
	echo "</td>";
	echo"<td>";
	echo $fila['edad'];
	echo "</td>";
	echo"<td>"; 
	echo $fila['dni'];
	echo "</td>";
	echo"<td>";
	echo $fila['f_ingreso'];
	echo "</td>";
	echo"<td>";
	echo $fila['p_trabajo'];
	echo "</td>";
	echo"<td>";
	echo $fila['sueldo'];
	echo "</td>";
	echo"<td>";
	echo $fila['estado_civil'];
	echo "</td>";
	echo "</tr>";
	
}
echo "</table>";
mysqli_close( $conexion );
?>
