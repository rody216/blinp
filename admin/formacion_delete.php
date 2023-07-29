<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM academicos WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Formación Academica eliminado con éxito';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Seleccione el dato para eliminar';
	}

	header('location: formacion.php');
	
?>