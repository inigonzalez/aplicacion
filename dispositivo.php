<!DOCTYPE html>
<html>
<head>


	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">




	<title>Dispositivos</title>



	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/theme.css">     


</head>
<body>

	<div class="container">

        <div class="masthead">
          <h3 class="text-muted">Control Parental</h3>
          <nav>
            <ul class="nav nav-justified">
              <li class="active"><a href="#">Dispositivos</a></li>
              <li><a href="grupo.php">Grupos</a></li>
            </ul>
          </nav>
        </div>

	<center>
		<table class="table table-striped">
			<thead>
				<tr>
					<th colspan="1"><a href="anadirdispositivo.php">Añadir nuevo dispositivo</a></th>
					<th colspan="6">Lista de dispositivos</th>
				</tr>
			</thead>
			<tbody>
				<tr>

					<td>Mac</td>
					<td>Nombre</td>
					<td>Grupo</td>
					<td>Estado</td>
					<td colspan="2">Opciones</td>
					

				</tr>

				<?php
					include("conexion.php");
					$query="SELECT * FROM dispositivos";
					$resultado= $conexion->query($query);
					while($row=$resultado->fetch_assoc()){
				?>

				<tr>
					<td><?php echo $row['mac']; ?></td>
					<td><?php echo $row['nombre']; ?></td>
					<td><?php echo $row['grupo']; ?></td>
					<td><?php echo $row['control']; ?></td>
					<td><a href="modificardispositivo.php?id=<?php echo $row['id']; ?>;">Modificar</a></td>
					<td><a href="eliminardispositivo.php?id=<?php echo $row['id']; ?>;">Eliminar</a></td>
				</tr>
			
				<?php
					}

				?>

			</tbody>
		</center>
	</table>

</body>
</html>