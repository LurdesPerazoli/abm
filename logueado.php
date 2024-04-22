
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="estilo.css">
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