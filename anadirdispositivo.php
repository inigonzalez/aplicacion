<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<center>

	<h1>Añadir Dispositivo</h1>
	<form action = "guardardispositivo.php" method= "POST">

		<br>

		<input type= "text" REQUIRED name= "mac" placeholder="mac..." value=""/><br><br>
		<input type= "text" REQUIRED name= "nombre" placeholder="nombre..." value=""/><br><br>
		<select REQUIRED name="grupo"/>
			<option value = "" selected> grupo... </option>
		
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

			<option value = "" selected> Control...</option>
			<option value = "Activo"> Activo</option>
			<option value = "No activo"> No activo </option>		

		</select><br><br>
		<input type= "submit" value= "Añadir dispositivo" />

	</form>
</center>

</body>
</html>