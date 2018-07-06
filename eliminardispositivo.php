<?php

include("conexion.php");

	$id=$_REQUEST['id'];

	$query= "DELETE FROM dispositivos WHERE id='$id'";
	$resultado= $conexion->query($query);

	if($resultado){

		header("location: dispositivo.php");
	}else{

		echo "Insercion no exitosa";
	}

?>