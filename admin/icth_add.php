<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
        $position = $_POST['id'];	
		$position = $_POST['tipoExamen'];
		$schedule = $_POST['personas_id'];
		$filename = $_FILES['archivo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['archivo']['tmp_name'], '../archive/'.$filename);	
		}
		//creating employeeid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		$sql = "INSERT INTO icth (id, tipoExamen, archivo, personas_id) VALUES ('$id', '$tipoExamen', '$archivo', '$personas_id', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Icth añadido Correctamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Campos Faltantes';
	}

	header('location: icth.php');
?>


