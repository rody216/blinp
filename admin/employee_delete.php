<?php
include 'includes/session.php';

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM employee WHERE id = ?";
    
    // Use prepared statement to delete the record
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Employee eliminado con éxito';
    } else {
        $_SESSION['error'] = 'Error al eliminar el employee: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione el employee para eliminar primero';
}

header('location: employee.php');
?>
