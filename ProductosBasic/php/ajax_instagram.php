<?php
include 'conexion.php';
$cadena		= $_POST['nombre'];
$nombre		= substr($cadena, 0, 4);
$apellido_p = substr($cadena, -4);
$query1='SELECT descuento FROM producto WHERE producto LIKE "%'.$nombre.'%"';
$resultado=mysqli_query($conexion, $query1);
$row=mysqli_fetch_array($resultado);
echo $row['descuento'];
?>