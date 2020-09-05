<?php

function url($nombreurl){
	$url = $_SERVER["REQUEST_URI"]; // URL EVITANDO EL SERVIDOR
    $separar = explode("/",$url);
    $valor = $separar[count($separar)-1];
    if($nombreurl == $valor){
    	return true;
    }else{
    	return false;
    }
}

function datosFacturacion($valor,$cone){
	
	$sql = mysqli_query($cone, "SELECT * FROM `informacion_facturacion` WHERE `id`=1");
	$re = mysqli_fetch_array($sql);
	return $re["".$valor.""];
}
?>