<?php
include 'includes/session.php';

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    
    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM academicos WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        $_SESSION['success'] = 'Formación Académica eliminada con éxito';
    } else {
        $_SESSION['error'] = 'Error al eliminar la Formación Académica: ' . $conn->error;
    }

    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione el dato para eliminar';
}

header('location: formacion.php');
exit;
?>
