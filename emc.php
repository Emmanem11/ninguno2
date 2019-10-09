<?php
			
	
	
	
//recuperamos las variables del registro xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

	
//recuperamos las variables del formulario1		xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx						
	$CCostos=$_POST['CCostos'];
	$NPA=$_POST['NPA'];
	$ObjEstrategicos=$_POST['ObjEstrategicos'];
	$Meta_inst=$_POST['Meta_inst'];
	$UnidadMed=$_POST['UnidadMed'];
	$Indicadores=$_POST['Indicadores'];
	$CPAd=$_POST['CPA'];
	$Formula=$_POST['Formula'];
	
	$sql="INSERT INTO $tablaformulario1 VALUES ('$CCostos',
									'$NPA',
									'$ObjEstrategicos',
									'$Meta_inst',
									'$UnidadMed',
									'$Indicadores',
									'$CPAd',
									'$Formula')";*/
									
//Validacion de datosxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	
	/*$idUsuario=$_POST['idUsuario'];
	$password=$_POST['password'];
	
	

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
	 
	
	mysqli_close($conectar);*/
	
//otra cosa jeje xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	
	/*$ejecutar = mysqli_query($conectar,$sql);
	
	if (!$ejecutar) {
		echo " hubo algun error y no se donde";
	}else{
		echo "datos guardados correctamente<br><a href='IndexT.html'>Volver</a>";	 	
	 }
	 */

?>