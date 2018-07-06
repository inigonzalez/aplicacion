<?php

include("conexion.php");

	$mac= $_POST['mac'];
	$nombre= $_POST['nombre'];
	$grupo= $_POST['grupo'];
	$control= $_POST['control'];

	$query= "INSERT INTO dispositivos(mac,nombre,grupo,control) VALUES ('$mac','$nombre','$grupo','$control')";
	$resultado= $conexion->query($query);

	if($resultado){

		header("location: dispositivo.php");
	}else{

		echo "Insercion no exitosa";
	}

?>