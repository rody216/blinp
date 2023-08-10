<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $institucion = $_POST['institution'];
    $nivel = $_POST['nivel'];
    $titulo = $_POST['titulo'];
    $fecha = $_POST['fecha'];

    // Use prepared statement to update the record
    $stmt = $conn->prepare("UPDATE parentesco SET institucion = ?, nivel = ?, titulo = ?, fecha = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $institucion, $nivel, $titulo, $fecha, $id);

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Información parentesco actualizada con éxito';
    } else {
        $_SESSION['error'] = 'Error al actualizar la información parentesco: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione la formación para editar primero';
}

header('location: familia.php');
?>
