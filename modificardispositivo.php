<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
</head>
<body>
	
	<center>
	
	<h1>Modificar dispositivo</h1>
	
		<?php

			$id=$_REQUEST['id'];
			include("conexion.php");
			$query="SELECT * FROM dispositivos where id='$id'";					
			$resultado= $conexion->query($query);
			$row=$resultado->fetch_assoc();
		?>


	<form action = "operacion_modificar_dispositivo.php?id=<?php echo $row['id']; ?>" method= "POST">

		<br>
		<input type= "text" REQUIRED name= "mac" placeholder="mac..." value="<?php echo $row['mac']; ?>" /><br><br>
		<input type= "text" REQUIRED name= "nombre" placeholder="nombre..." value="<?php echo $row['nombre']; ?>"/><br><br>

		<select REQUIRED name="grupo"/>
			<option value = "<?php echo $row['grupo']; ?>" selected> <?php echo $row['grupo']; ?> </option>
		
		<?php
					include("conexion.php");
					$query="SELECT * FROM grupos";
					$resultado= $conexion->query($query);
					while($row=$resultado->fetch_assoc()){
		?>

			<option	value="<?php echo $row['numero']; ?>"> <?php echo $row['numero']; ?></option>		
                 
             
		<?php
			}

		?>

		</select><br><br>

		<select REQUIRED name= "control">

			<option value = "" selected> <?php echo $row['control']; ?></option>
			<option value = "Activo"> Activo</option>
			<option value = "No activo"> No activo </option>		

		</select><br><br>

		<input type= "submit" value= "Modificar dispositivo" />


	</form>

</center>

</body>
</html>