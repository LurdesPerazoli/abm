
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="estilo.css">
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