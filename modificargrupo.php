<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
</head>
<body>
	<center>
	<h1>Modificar grupo</h1>
	
		<?php

			$id=$_REQUEST['id'];
			include("conexion.php");
			$query="SELECT * FROM grupos where id='$id'";					
			$resultado= $conexion->query($query);
			$row=$resultado->fetch_assoc();
		?>


	<form action = "operacion_modificar_grupo.php?id=<?php echo $row['id']; ?>" method= "POST">

		<br>
		<input type= "text" REQUIRED name= "numero" placeholder="numero..." value="<?php echo $row['numero']; ?>" /><br><br>
		<input type= "text" REQUIRED name= "hora_inferior" placeholder="hora_inferior..." value="<?php echo $row['hora_inferior']; ?>"/><br><br>
		<input type= "text" REQUIRED name= "hora_superior" placeholder="hora_superior..." value="<?php echo $row['hora_superior']; ?>"/><br><br>

		<input type= "submit" value= "Modificar grupo" />


	</form>
</center>

</body>
</html>