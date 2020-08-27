<?php
session_start();
include("conexion.php");
$areglo = Array();
if ($_POST['usuario'] == "" or $_POST['contrasenia'] == "") {
	$areglo["estado"] = false;
	$areglo["mensje"] = 'El usuario y la contraseña son erróneas';
	echo json_encode($areglo);
	exit();
}
$stmt = mysqli_query($con, 'SELECT * FROM `usuarios` WHERE `nombre`="'.$_POST['usuario'].'"');
if ($stmt) {
	$re = mysqli_fetch_array($stmt);
	if ($stmt->num_rows > 0) {
		$password = $re['contraseña'];
		if ($_POST['contrasenia'] === $password) {
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['usuario'] = $re;
			$areglo["estado"] = true;
			$areglo["mensje"] = 'Login exitoso!';
			echo json_encode($areglo);
			exit();
		} else {
			$areglo["estado"] = false;
			$areglo["mensje"] = 'El usuario y la contraseña son erróneas';
			echo json_encode($areglo);
			exit();
		}
	} else {
		$areglo["estado"] = false;
		$areglo["mensje"] = 'El usuario y la contraseña son erróneas';
		echo json_encode($areglo);
		exit();
	}
	$stmt->close();
}else{
	$areglo["estado"] = false;
	$areglo["mensje"] = 'El usuario y la contraseña son erróneas';
	echo json_encode($areglo);
	exit();
}
?>