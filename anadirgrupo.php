<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Guardar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/theme.css">
	<script src="js/js2.js"></script>	
	<script src="js/jquery.js"></script>
</head>
<body>


    <h1>Añadir grupo</h1>
  </div>

  	<div data-role="main" class="ui-content">
		<form action = "guardargrupo.php" method= "POST">			
			<div data-role="rangeslider">
				<input type="range" name="hora_inferior" id="hora_inf" value="5" min="0" max="24">
				<input type="range" name="hora_superior" id="hora_sup" value="13" min="0" max="24">
			</div>
			<input type= "text" REQUIRED name= "numero" placeholder="Numero..." value=""/>
			<input type= "submit" value= "Añadir grupo" />
		</form>
	</div>
 

</body>
</html>