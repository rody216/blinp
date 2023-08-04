<?php
include 'includes/session.php';

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM bancarios WHERE id = ?";
    
    // Use prepared statement to delete the record
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Finanzas eliminado con éxito';
    } else {
        $_SESSION['error'] = 'Error al eliminar los datos: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione para eliminar primero';
}

header('location: finanzas.php');
?>
