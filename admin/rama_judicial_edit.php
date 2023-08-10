<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $numeroProceso = $_POST['numeroProceso'];   
    $fechaRadicacion = $_POST['fechaRadicacion']; // Corregir aquí
    $tipoProceso = $_POST['tipoProceso'];    
    $clase = $_POST['clase'];
    $estatus = $_POST['estatus'];
    $pdf = $_POST['pdf'];
    // Use prepared statement to update the record
    $stmt = $conn->prepare("UPDATE ramajudicialprocesos SET numeroProceso = ?, fechaRadicacion = ?, tipoProceso = ?, clase = ?, estatus = ?, pdf = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $numeroProceso, $fechaRadicacion,  $tipoProceso, $clase , $estatus, $pdf, $id);
    

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Información judicial procesos actualizada con éxito';
    } else {
        $_SESSION['error'] = 'Error al actualizar la información judicial: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione la formación para editar primero';
}

header('location: rama_judicial_p.php');
?>
