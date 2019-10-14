<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inicio de sesion</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/all.css">
		<link rel="stylesheet" href="css/sweetalert2.min.css">

		<script src="js/bootstrap.min.js"></script>
		<script src="js/loadingoverlay.min.js"></script>
		<script src="js/sweetalert2.min.js"></script>
	</head>
	<body>
		<br>
		<h1 align="center">Index tecnico</h1>
		<br>

		<div class="container" align="center">
	<table class="table">
		<tr align="justify">
			<td>clave del centro de costo</td>
			<td>nombre del centro de costo</td>
	
		</tr>

		<?php 
		include("Servidor/abrir_conexion.php");
		$sql="SELECT * from centro_costos";
		$result=mysqli_query($conectar,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr align="justify">
			<td><?php echo $mostrar['clave_centro_costos'] ?></td>
			<td><?php echo $mostrar['nombre_centro_costos'] ?></td>

		</tr>
	<?php 
	}
	 ?>
	</table>

		</div>

	</body>
</html>
