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

		$sql = "INSERT INTO vehiculos (tipo_Vehiculo, placas, modelo, marca, linea, secretaria_Transito, documento) VALUES ('$tipo_Vehiculo', '$placas', '$modelo', '$marca', '$linea', '$secretaria_Transito', '$documento')";

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
