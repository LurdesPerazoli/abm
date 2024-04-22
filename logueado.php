<?php
include("conexion.php");
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$sql="SELECT * from DATOS where  usuario='$usuario' and correo='$correo'";
$consulta=mysqli_query($conex,$sql);
$existe=mysqli_num_rows($consulta);
if($existe==1)
{
	//echo "El usuario existe";
	header("location:bienvenido.php");
}
else
{
	echo "El usuario no existe";
}
?>