<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$fechaHechos = $_POST['fechaHechos'];
		$lugarHechos = $_POST['lugarHechos'];
		$articulo = $_POST['articulo'];
		$numeral = $_POST['numeral'];

		$sql = "INSERT INTO mmpPonal (fechaHechos, lugarHechos, articulo, numeral) VALUES ('$fechaHechos', '$lugarHechos', '$articulo', '$numeral')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Antecedentes Mmp añadido satisfactoriamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Completa el formulario para agregar antecedentes Mmp';
	}

	header('location: mmp.php');
?>
