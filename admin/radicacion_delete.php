<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM ramaJudicialRadicacion WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Procesos judiciales radicación Eliminado con éxito';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Seleccione el elemento para eliminar primero';
	}

	header('location: judicial_radicacion.php');
	
?>