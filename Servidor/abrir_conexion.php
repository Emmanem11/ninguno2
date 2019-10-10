<?php
	//datos para la conexion a la base de datos
	$host = "localhost";
	$usuarioDB = "root";
	$passBD = "";
	$nomDB = "sesiones";
	
	//Lista de tablas
	$tabladatos = "datos";
	$tablaformulario1 = "formulario1";
	$tablaroles = "roles";
	$tablacentro_costos = "centro_costos";
	
	//conexion con el servidor xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	//$conectar = new mysqli($host,$usuarioDB,$passBD,$nomDB);
	$conectar = mysqli_connect($host,$usuarioDB,$passBD,$nomDB);
	$conectar->set_charset("utf8");
	//verifica lo conexion
	if (!$conectar) {
		echo "No se pudo conectar con el servidor ";
		exit();
		
			
	}	
	
?>