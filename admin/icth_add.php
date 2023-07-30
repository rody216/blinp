<?php
include 'includes/session.php';

if (isset($_POST['add'])) {
    $tipo_Examen = $_POST['tipo_Examen'];
    $fecha = $_POST['fecha'];
    $filename = $_FILES['archivo']['name'];
    if(!empty($filename)){
        move_uploaded_file($_FILES['archivo']['tmp_name'], '../archive/'.$filename);	
    }
    $personas_id = $_POST['personas_id'];
    $fechaCreacion = date('Y-m-d H:i:s'); // Obtener la fecha y hora actual en el formato adecuado

    // Resto del código para crear la conexión y ejecutar la consulta
    // ...

    // Preparar la consulta
    $sql = "INSERT INTO icth (tipo_Examen, fecha, archivo, personas_id, fechaCreacion) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Vincular los parámetros
    $stmt->bind_param("sssss", $tipo_Examen, $fecha, $filename, $personas_id, $fechaCreacion);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        $_SESSION['success'] = 'ICTH agregado satisfactoriamente';
    } else {
        $_SESSION['error'] = $conn->error;
    }
} else {
    $_SESSION['error'] = 'Llena el formulario de agregar primero';
}

header('location: icth.php');
?>
