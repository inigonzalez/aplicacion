<!DOCTYPE html>
<html>
<head>


	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">




	<title>Grupos</title>



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
              <li><a href="dispositivo.php">Dispositivos</a></li>
              <li class="active"><a href="#">Grupos</a></li>
            </ul>
          </nav>
        </div>

	<center>
		<table class="table table-striped">
			<thead>
				<tr>
					<th colspan="1"><a href="anadirgrupo.php">Añadir nuevo grupo</a></th>
					<th colspan="6">Lista de grupos</th>
				</tr>
			</thead>
			<tbody>
				<tr>

					<td>Numero</td>
					<td>Hora inicio</td>
					<td>Hora fin</td>
					<td colspan="2">Opciones</td>
					

				</tr>

				<?php
					include("conexion.php");
					$query="SELECT * FROM grupos";
					$resultado= $conexion->query($query);
					while($row=$resultado->fetch_assoc()){
				?>

				<tr>
					<td><?php echo $row['numero']; ?></td>
					<td><?php echo $row['hora_inferior']; ?></td>
					<td><?php echo $row['hora_superior']; ?></td>
					<td><a href="modificargrupo.php?id=<?php echo $row['id']; ?>;">Modificar</a></td>
					<td><a href="eliminargrupo.php?id=<?php echo $row['id']; ?>;">Eliminar</a></td>
				</tr>
			
				<?php
					}

				?>

			</tbody>
		</center>
	</table>

</body>
</html>