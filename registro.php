<?php
$conexion=mysqli_connect("localhost","root","","personal") or die("Problemas con la 
conexión");
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $id_cargo = $_POST['id_cargo'];
        
        $insertar ="INSERT Into personas values ( '$nombre', '$usuario', '$contraseña', '$id_cargo')"; 
         
mysqli_close($conexion);
echo "Insertado correctamente"; 
?>
