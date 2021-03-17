<?php
include 'cone.php';

if ($conexion){
	
	echo "<br />";
	}
		else {
			echo 'Ha ocurrido un error.';
		}

	//recibir los datos y almacenarlos en variables
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$direccion = $_POST["direccion"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];

	//consulta para insertar
	$insertar = "INSERT INTO estudiante (nombre, apellido, cedula, direccion, correo, telefono) 
	VALUES ('$nombre','$apellido', '$cedula', '$direccion', '$correo', '$telefono')";

		$resultado = mysqli_query($conexion, $insertar);
		if (!$resultado){
			echo ' Error al registrarse.';
			} 
		
	//cerrar la conexion
	mysqli_close($conexion);
