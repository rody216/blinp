<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $certificado = $_POST['certificado'];   
    $resultado = $_POST['resultado']; // Corregir aquí
    $sancion = $_POST['sancion'];    
    $siri = $_POST['siri'];
    $providencia = $_POST['providencia'];
    $hora = $_POST['hora'];
    $fecha = $_POST['fecha'];
    $documento = $_POST['documento'];
    // Use prepared statement to update the record
    $stmt = $conn->prepare("UPDATE procuraduria SET certificado = ?, resultado = ?, sancion = ?, siri = ?, providencia = ?, hora = ?, fecha = ?, documento = ? WHERE id = ?");
    $stmt->bind_param("ssssssssi", $certificado, $resultado, $sancion, $siri, $providencia, $hora, $fecha, $documento, $id);
    

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Información  actualizada con éxito';
    } else {
        $_SESSION['error'] = 'Error al actualizar la información: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione la formación para editar primero';
}

header('location: procuraduria.php');
?>
