<?php
	require 'conexion.php';
  


                           
                            
	

	//$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
	$consulta = "SELECT * FROM usuarios ";//nombre de la tabla a consultar
	$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h5>id</th></h5>";
echo "<th><h5>Nombre</th></h5>";
echo "<th><h5>Usuario</th></h5>";
echo "<th><h5>Contraseña</th></h5>";
echo "<th><h5>Cargo</th></h5>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";    
    echo "<td><h6>" . $colum['id']. "</td></h6>";
    echo "<td><h6>" . $colum['nombre']. "</td></h6>";
    echo "<td><h6>" . $colum['usuario']. "</td></h6>";    
    echo "<td><h6>" . $colum['contraseña']. "</td></h6>";
    echo "<td><h6>" . $colum['id_cargo']. "</td></h6>";
    
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

  

?>
	

<html lang="es">
	<head>
		
	<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <title>consulta db</title>
    <style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgb(31, 173, 216);
  color: white;
}
</style>
</head>
	</head>
	
	<body>
				
    <a href="principal.php" class="btn btn-default">Regresar</a>
            <a href="registro3.php" class="btn btn-default" >Modificar</a>
            <a href="principal.php" class="btn btn-default">Eliminar</a>	
	</body>
</html>