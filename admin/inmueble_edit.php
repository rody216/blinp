<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $ciudad= $_POST['ciudad'];
    $oficina = $_POST['oficina'];
    $matricula = $_POST['matricula'];
    $direccion = $_POST['direccion'];
    $documento = $_POST['documento'];
    $matricula = $_POST['matricula'];

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
