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
$id			= $_POST['id_user'];

$query='UPDATE producto SET producto ="'.$producto.'", codigo="'.$codigo.'", categoria="'.$categoria.'", cantidad="'.$cantidad.'", descripcion="'.$descripcion.'", precio="'.$precio.'", marca="'.$marca.'", descuento="'.$descuento.'", estatus = 2 WHERE id = "'.$id.'"';
if(mysqli_query($conexion, $query)){
	echo "<script>alert('Registro editado correctamente.');window.location.href='../editar.php';</script>";
} else{
	echo "<script>alert('Registro fallido.');window.location.href='../editar.php';</script>";
}
?>