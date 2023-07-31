<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$fecha = $_POST['fecha'];
		$hora = $_POST['hora'];
		$resultado= $_POST['resultado'];
		$fechaActualizacion = $_POST['fechaActualizacion'];
		$personas_id= $_POST['personas_id'];


		$sql = "INSERT INTO antecedentesPonal (fecha, hora, resultado, fechaActualizacion, personas_id) VALUES ('$fecha', '$hora', '$resultado', '$fechaActualizacion', '$personas_id')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Antecedentes Ponal añadido satisfactoriamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Completa el formulario para agregar antecedentes Ponal';
	}

	header('location: ponal.php');
?>
