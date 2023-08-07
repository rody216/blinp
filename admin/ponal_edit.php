<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $fecha = $_POST['fecha'];   
    $hora = $_POST['hora']; // Corregir aquí
    $resultado = $_POST['resultado'];    
    $fechaActualizacion = $_POST['fechaActualizacion'];
    $personas_id = $_POST['personas_id'];
    $archivo = $_POST['archivo'];
    
    // Use prepared statement to update the record
    $stmt = $conn->prepare("UPDATE antecedentesPonal SET fecha = ?, hora = ?, resultado = ?, fechaActualizacion = ?, personas_id = ?, archivo = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $fecha, $hora, $resultado, $fechaActualizacion, $personas_id, $id, $archivo);
    

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Información ponal actualizada con éxito';
    } else {
        $_SESSION['error'] = 'Error al actualizar la información ponal: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione la formación para editar primero';
}

header('location: ponal.php');
?>
