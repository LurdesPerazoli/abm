
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="estilo.css">

<?php
include("conexion.php");
$sql="SELECT * FROM datos";
$consulta=mysqli_query($conex,$sql);
$cuantos=mysqli_num_rows($consulta);
echo "<table border=1 align=center>";
while($registro=mysqli_fetch_array($consulta)){
echo "<tr>";
echo "<td>".$registro['usuario']."</td>";
echo "<td>".$registro['correo']."</td>";

}
echo "</tr>";

echo "</table>";

echo "Se encontraron: <b>".$cuantos."</b> datos validos";
?>