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

$query1='SELECT id FROM producto ORDER BY Id DESC LIMIT 1';
$resultado=mysqli_query($conexion, $query1);
$row=mysqli_fetch_array($resultado);
$id= $row['id'] + 1;

$query='INSERT INTO producto(id, producto, codigo, categoria, cantidad, descripcion, precio, marca, descuento, estatus) VALUES 
('.$id.', "'.$producto.'","'.$codigo.'","'.$categoria.'","'.$cantidad.'","'.$descripcion.'","'.$precio.'","'.$marca.'","'.$descuento.'",1)';
if(mysqli_query($conexion, $query)){
	echo "<script>alert('Producto registrado correctamente.');window.location.href='../alta.html';</script>";
} else{
	echo "<script>alert('Registro fallido.');window.location.href='../alta.html';</script>";
}
?>