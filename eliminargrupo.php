<?php

include("conexion.php");

	$id=$_REQUEST['id'];

	$query= "DELETE FROM grupos WHERE id='$id'";
	$resultado= $conexion->query($query);

	if($resultado){

		header("location: grupo.php");
	}else{

		echo "Insercion no exitosa";
	}

?>