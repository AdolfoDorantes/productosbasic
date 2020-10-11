<?php
include 'conexion.php';
$producto		= $_POST['producto'];
$codigo			= $_POST['codigo'];
$categoria		= $_POST['categoria'];
$cantidad		= $_POST['cantidad'];
$descripcion	= $_POST['descripcion'];
$precio			= $_POST['precio'];
$marca			= $_POST['marca'];
$descuento		= $_POST['descuento'];
$id				= $_POST['id_user'];

$query='UPDATE producto SET estatus = 3 WHERE id = "'.$id.'"';
if(mysqli_query($conexion, $query)){
	echo "<script>alert('Registro dado de baja correctamente.');window.location.href='../baja.php';</script>";
} else{
	echo "<script>alert('Registro fallido.');window.location.href='../baja.php';</script>";
}
?>