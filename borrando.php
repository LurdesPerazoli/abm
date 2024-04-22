<?php
include("conexion.php");
$usuario=$_POST['usuario'];

$sql="DELETE from datos WHERE usuario='$usuario'";
if(mysqli_query($conex,$sql)){
	echo "Datos eliminados correctamente";
}
else
{
	echo "Hubo un error en la eliminacion";
}

?>