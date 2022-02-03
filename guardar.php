<?php
 include 'conexion.php';
 

 if ($_SERVER ['REQUEST_METHOD']=== "POST") {
	$nombre  = $_POST['nombre'];
	$usuario  = $_POST['usuario'];
	$contraseña = $_POST['contraseña'];
	$cargo = $_POST['id_cargo'];
	session_start();
$_SESSION['usuario'] = $usuario;
$conexion=mysqli_connect("localhost","root","","rol");

   
   
$insertar = "INSERT INTO `usuarios`( `nombre`, `usuario`, `contraseña`, `id_cargo`) VALUES ('$nombre','$usuario','$contraseña','$cargo') ";

if ($mysqli->query($insertar)===true) {
	   echo " Operación exitosa";

   }else{
	   echo "error al insertar datos";
   }

 }
?>