<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $tipo_Examen = $_POST['tipo_Examen'];
    $archivo = $_POST['archivo'];
    $fecha = $_POST['fecha'];

    // Use prepared statement to update the record
    $stmt = $conn->prepare("UPDATE icth SET tipo_Examen = ?, archivo = ?, fecha = ? WHERE id = ?");
    $stmt->bind_param("ssss", $tipo_Examen, $archivo, $fecha, $id);

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Información académica actualizada con éxito';
    } else {
        $_SESSION['error'] = 'Error al actualizar la información académica: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione la formación para editar primero';
}

header('location: icth.php');
?>
