<?php
include('conexion.php');


$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;


$conexion=mysqli_connect("localhost","root","","rol");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta) or die ("Ninguna DB seleccionada"); 

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    header("location:principal.php");

}else
if($filas['id_cargo']==2){ //empleado
header("location:secundario.php");

}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR DE INGRESO</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
