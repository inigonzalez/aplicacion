<?php
include("conexion.php");


	$numero= $_POST['numero'];
	$hora_inferior= $_POST['hora_inferior'];
	$hora_superior= $_POST['hora_superior'];

	

	$query= "INSERT INTO grupos(numero,hora_inferior,hora_superior) VALUES ('$numero','$hora_inferior','$hora_superior')";
	$resultado= $conexion->query($query);

	
	if($resultado){
		header("location: dispositivo.php");
	}else{

		echo "No puedes guardar dos grupos con el mismo número";
	}

?>