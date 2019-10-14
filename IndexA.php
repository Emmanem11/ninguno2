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
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	</head>

	<body>
		<h1 align="center">Administrador</h1>

		<div class="container">
			<form action="IndexA.php" method="POST">
				<h1 align="center"> Agregar nuevo centro de costos</h1>

<!--inicia formulario-->			
			<div class="form-group">
			<div class="row">
				

				<div class="col-md-6">	
					<label for="ACCC">Clave del centro de costos</label>
					<br>
					<input type="number" name="ACCC" class="form-control" required>
					<br>
				</div>

				<div class="col-md-6">	
					<label for="ANCC">Nombre del centro de costo</label>
					<br>
					<input type="text" name="ANCC" class="form-control" required>
					<br>
				</div>

			</div>
			</div>

				<center><input type="submit" class="btn btn-primary" value="Agregar" name="btn1"></center>
				
			</form>

<!--finaliza formulario-->			
<?php
			if(isset($_POST['btn1']))
			{
				include("Servidor/abrir_conexion.php");
				$ACCC=$_POST['ACCC'];
				$ANCC=$_POST['ANCC'];

				
				$conectar = mysqli_query($conectar,"INSERT INTO centro_costos VALUES ('$ACCC','$ACCC - $ANCC')");
			
			echo '<div class="alert alert-success">
    <strong>hecho!</strong> se insertó correctamente
  </div>';
			}		
?>
<!--para mostrar-->
			<br>
			<div class="container" align="center">
				<table class="table table-striped">
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
						<td> <?php echo $mostrar['clave_centro_costos'] ?></td>
						<td> <?php echo $mostrar['nombre_centro_costos'] ?></td>

					</tr>
<?php 
				}
?>
				</table>

		</div>


		</div>
	


	</body>
</html>