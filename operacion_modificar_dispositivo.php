<?php

include("conexion.php");

	$id=$_REQUEST['id'];
	$mac= $_POST['mac'];
	$nombre= $_POST['nombre'];
	$grupo= $_POST['grupo'];
	$control= $_POST['control'];

	$query= "UPDATE dispositivos SET mac='$mac',nombre='$nombre',grupo='$grupo',control='$control' WHERE id='$id'";
	$resultado= $conexion->query($query);

	if($resultado){

		header("location: dispositivo.php");
	}else{

		echo "Insercion no exitosa";
	}

?>