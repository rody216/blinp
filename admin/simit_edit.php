<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $numeroComparendo = $_POST['numeroComparendo'];   
    $fecha = $_POST['fecha']; // Corregir aquí
    $secretaria = $_POST['secretaria'];    
    $infraccion = $_POST['infraccion'];
    $valor = $_POST['valor'];
    $pdf = $_POST['pdf'];
    // Use prepared statement to update the record
    $stmt = $conn->prepare("UPDATE spoa SET numeroComparendo = ?, fecha = ?, secretaria = ?, infraccion = ?, valor = ?, pdf = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $numeroComparendo, $fecha, $secretaria, $infraccion, $valor, $pdf, $id);
    

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Información simit actualizada con éxito';
    } else {
        $_SESSION['error'] = 'Error al actualizar la información simit: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione la formación para editar primero';
}

header('location: simit.php');
?>
