<?php
$usuario	='root';
$pass		='';
$servidor	='localhost';
$basededatos='user';

$conexion= mysqli_connect($servidor, $usuario, $pass) or die('No se ha podido conectar al servidor de Base de datos');
$db=mysqli_select_db($conexion, $basededatos) or die('No se ha podido conectar al servidor de Base de datos');
?>