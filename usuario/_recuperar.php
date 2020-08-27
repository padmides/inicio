<?php
include("conexion.php");

$sql = mysqli_query($con, 'SELECT * FROM `usuarios` WHERE `email`="'.$_POST['email'].'"');

if($sql->num_rows > 0){
	$re = mysqli_fetch_array($sql);
	
}else{
	$areglo["estado"] = false;
	$areglo["mensje"] = 'El mail no existe.';
	echo json_encode($areglo);
	exit();
}