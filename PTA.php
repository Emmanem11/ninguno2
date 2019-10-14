<?php 

	include "Servidor/abrir_conexion.php";
	$query2=mysqli_query($conectar,"SELECT clave_centro_costos,nombre_centro_costos FROM $tablacentro_costos");

 ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Formulario 1</title>
		
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
			<form action="Formulario1.php" method="POST">
			
			<div class="form-group">
			<div class="row">
			


			<div class="col-md-6">	
				<label for="CCostos">Centro de costos</label>
				<br>
			
				<select name="CCostos" class="custom-select mb-3" required>

					<?php 
                        while($datos = mysqli_fetch_array($query2))
                        {
                    ?>
                            <option value="<?php echo $datos['clave_centro_costos']?>" > 
                            	<?php echo $datos['nombre_centro_costos']?> 
                            </option>
                    <?php
                        }
                    ?> 
				</select>
				<br>
			</div>	
			
			<div class="col-md-6">	
				<label for="NPA">Nombre del Programa ambiental</label>
				<br>
				<input type="text" name="NPA" class="form-control" required>
				<br>
			</div>
			
			<div class="col-md-6">	
				<label for="ObjEstrategicos">Objetivos estrategicos</label>
				<br>
				<!--<input type="text" name="ObjEstrategicos" class="form-control" required>-->
				<select name="ObjEstrategicos" class="custom-select mb-3" required>
   				    
      				<option value="datos">datos</option>
					<option value=""></option>
      			</select>
				<br>
			</div>	
			
			<div class="col-md-6">	
				<label for="Meta_inst">Meta institucional y/o producto de sus atribuciones</label>
				<br>
				<!--<input type="text" name="Meta_inst" class="form-control" required>-->
				<select name="Meta_inst" class="custom-select mb-3" required>
   				    
      				<option value="data">data</option>
					<option value=""></option>
      			</select>
				<br>
			</div>
			
			<div class="col-md-6">	
				<label for="UnidadMed">Unidad de medida</label>
				<br>
				<!--<input type="text" name="UnidadMed" class="form-control" required>-->
				<select name="UnidadMed" class="custom-select mb-3" required>
   				
      				<option value="Unidad">Unidad</option>
					<option value=""></option>
      			</select>
				<br>
			</div>
			
			<div class="col-md-6">	
				<label for="Indicadores">Indicador(es)</label>
				<br>
				<!--<input type="text" name="Indicadores" class="form-control" required>-->
				<select name="Indicadores" class="custom-select mb-3" required>
   				    
      				<option value="Indicador">Indicador</option>
					<option value=""></option>
      			</select>
				<br>
			</div>
			
			<div class="col-md-2">	
				<label for="CPA">Cantidad programada anual</label>
				<br>
				<input type="number" name="CPA" class="form-control" required>
				<br>
			</div>		
			</div>
			
			<div class="col-md-8 row">	
				<label for="Formula">Formula</label>
				<br>
				<!--<input type="text" name="Formula" class="form-control" required>-->
				<select name="Formula" class="custom-select mb-3" required>
   				    
      				<option value="formla">Formula</option>
					<option value=""></option>
      			</select>
				<br>
			</div>
			
			<input type="submit" class="btn btn-primary"  value="Enviar" name="btn2">
			</div>
			</form>
			
			<?php
			if(isset($_POST['btn2']))
			{
				include("Servidor/abrir_conexion.php");
				$CCostos=$_POST['CCostos'];
				$NPA=$_POST['NPA'];
				$ObjEstrategicos=$_POST['ObjEstrategicos'];
				$Meta_inst=$_POST['Meta_inst'];
				$UnidadMed=$_POST['UnidadMed'];
				$Indicadores=$_POST['Indicadores'];
				$CPAd=$_POST['CPA'];
				$Formula=$_POST['Formula'];
				
				$conectar->query("INSERT INTO $tablaformulario1 VALUES ('$CCostos',
									'$NPA',
									'$ObjEstrategicos',
									'$Meta_inst',
									'$UnidadMed',
									'$Indicadores',
									'$CPAd',
									'$Formula')");
			include("Servidor/cerrar_conexion.php");
			echo "insersion correcta";
			}				
			
			
			?>
			
		</div>
		
	</body>
</html>