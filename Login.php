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
		<h1 align="center">Inicio de sesion</h1>
		<div class="container">
			<form action="emc.php" method="POST">
				
			<!--formulario-->
			<div class="form-group">
			
				<div class="row" align="center">
			
					<div class="col-md-12">
						<label for="idUsuario">ID de usuario</label>
							<br>
						<input type="text" name="idUsuario" class="form-control" required>
							<br>
					</div>	
				</div>
				
				<div class="row" align="center">
					<div class="col-md-12">
						<label for="password">Contraseña</label>
							<br>
						<input type="txt" name="password" class="form-control" required>
							<br>
					</div>
			
				</div>
			
				<input type="submit" class="btn btn-primary"  value="Enviar" name="btn3">
			
			</div>
			<!--fin del formulario-->
			
			</form>
			
			
			<?php
			
			if(isset($_POST['btn3']))
			{
			include("Servidor/abrir_conexion.php");
			$password=$_POST['password'];
			$idUsuario=$_POST['idUsuario'];
	
	

			$consulta="SELECT * FROM $tabladatos WHERE idUsuario='$idUsuario' AND password='$password'";
			$resultado=mysqli_query($conectar,$consulta);
			
			$filas=mysqli_num_rows($resultado); 
			
			if($filas>1){
				header("location:Home.html");
			}
			else{
				echo "Error en la autentificacion";
			}
			mysqli_free_result($resultado);
			 
			
			mysqli_close($conectar);
			include("Servidor/cerrar_conexion.php");
			echo "Se inserto correctamente";
			}
	
			//otra cosa jeje xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
				
				$ejecutar = mysqli_query($consulta);
				
				if (!$ejecutar) {
					echo " hubo algun error y no se donde";
				}else{
					echo "datos guardados correctamente<br><a href='IndexT.html'>Volver</a>";	 	
				 }
				
				?>
			</div>
			
			
			
		
		
		
		
	</body>
</html>