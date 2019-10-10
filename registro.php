<?php 

	include "Servidor/abrir_conexion.php";
	$query1=mysqli_query($conectar,"SELECT id_rol,nombre_rol FROM $tablaroles");

 ?>

 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registro de nuevos usuarios</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/all.css">
		<link rel="stylesheet" href="css/sweetalert2.min.css">

		<script src="js/bootstrap.min.js"></script>
		<script src="js/loadingoverlay.min.js"></script>
		<script src="js/sweetalert2.min.js"></script>
	</head>
	<body>
	<h1 align="center">Programa de trabajo anual</h1>
		<div class="container">
			<form action="registro.php" method="POST">
			
			<div class="form-group">
			<div class="row">
			
			<div class="col-md-6">	
				<label for="nombre">Nombre de usuario</label>
				<br>
				<input type="text" name="nombre" class="form-control" required>
				<br>
			</div>
			
			<div class="col-md-6">	
				<label for="AP">Apellido paterno</label>
				<br>
				<input type="text" name="AP" class="form-control" required>
				<br>
			</div>

			<div class="col-md-6">
				<label for="AM">Apellido materno</label>
				<br>
				<input type="text" name="AM" class="form-control" required>
				<br>
			</div>

			<div class="col-md-6">
				<label for="idUsuario">ID de empleado</label>
				<br>
				<input type="number" name="idUsuario" class="form-control" required>
			
			</div>

			<div class="col-md-6">
				<label for="password">Contraseña</label>
				<br>
				<input type="text" name="password" class="form-control" required>
			</div>
				
			<div class="col-md-6">
				<label for="id_role">Tipo de usuario</label>
				<br>
				<select name="id_role" class="custom-select mb-3" required>
					<?php 
                        while($datos = mysqli_fetch_array($query1))
                        {
                    ?>
                            <option value="<?php echo $datos['id_rol']?>" > 
                            	<?php echo $datos['nombre_rol']?> 
                            </option>
                    <?php
                        }
                    ?> 
      			</select>
      		</div>

			</div>
		
			<input type="submit" class="btn btn-primary"  value="Enviar" name="btn1">
			</div>
			</form>

			<?php
				if(isset($_POST['btn1']))
				{

						$nombre=$_POST['nombre'];
						$AP=$_POST['AP'];
						$AM=$_POST['AM'];
						$idUsuario=$_POST['idUsuario'];
						$password=$_POST['password'];
						$id_role=$_POST['id_role'];
						
						
						$conectar =mysqli_query($conectar,"INSERT INTO $tabladatos VALUES ('$nombre',
																				'$AP',
																				'$AM',
																				'$idUsuario',
																				'$password',
																				'$id_role')");
						
						echo "insersion correcta";
			}				
						
			?>
					
		</div>
		
	</body>
</html>


