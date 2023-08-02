<?php
include 'includes/session.php';

if (isset($_POST['delete'])) {
    $id_personal = $_POST['id_personal'];
    $sql = "DELETE FROM personal WHERE id_personal = ?";
    
    // Use prepared statement to delete the record
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_personal);

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Personal eliminado con éxito';
    } else {
        $_SESSION['error'] = 'Error al eliminar el empleado: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione el Personal para eliminar primero';
}

header('location: employee.php');
?>
