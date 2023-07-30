<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$tipo_Vehiculo = $_POST['tipo_Vehiculo'];
		$placas = $_POST['placas'];
		$modelo = $_POST['modelo'];
		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		$linea = $_POST['linea'];
		$secretaria_Transito = $_POST['secretaria_Transito'];
		$documento = $_POST['documento'];
		$fecha_Actualizacion = $_POST['fecha_Actualizacion'];
		$personas_id = $_POST['personas_id'];

		$sql = "INSERT INTO vehiculos (tipo_Vehiculo, placas, modelo, marca, linea, secretaria_Transito, documento, fecha_Actualizacion, personas_id) VALUES ('$tipo_Vehiculo', '$placas', '$modelo', '$marca', '$linea', '$secretaria_Transito', '$documento', '$fecha_Actualizacion', '$personas_id')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Vehículo añadido satisfactoriamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Completa el formulario para agregar un vehículo';
	}

	header('location: vehiculos.php');
?>
