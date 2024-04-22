<?php
include("conexion.php");
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$sql="UPDATE datos SET correo='$correo' WHERE usuario='$usuario'";
if(mysqli_query($conex,$sql)){
	echo "Datos actualizados correctamente";
}
else
{
	echo "Hubo un error en la actualizacion";
}

?>