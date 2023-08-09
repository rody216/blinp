<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM ramajudicialprocesos WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Procesos judiciales Eliminado con éxito';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Seleccione el elemento para eliminar primero';
	}

	header('location: rama_judicial_p.php');
	
?>