<?php

include("conexion.php");

	$id=$_REQUEST['id'];
	$numero= $_POST['numero'];
	$hora_inferior= $_POST['hora_inferior'];
	$hora_superior= $_POST['hora_superior'];


	$query= "UPDATE grupos SET numero='$numero',hora_inferior='$hora_inferior',hora_superior='$hora_superior' WHERE id='$id'";
	$resultado= $conexion->query($query);

	if($resultado){

		header("location: grupo.php");
	}else{

		echo "Insercion no exitosa";
	}

?>