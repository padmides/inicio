<?php
try {
	$con = mysqli_connect("localhost","root","","desus") or die("Error en la conexion");
mysqli_set_charset($con,"utf8mb4");

/* Comprueba la conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


/* Cierra la conexión */

} catch (Exception $e) {
	var_dump($e);
}

?>