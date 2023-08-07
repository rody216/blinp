<?php
	include 'includes/session.php';

	// Assuming $conn is a valid mysqli connection
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    // Use a prepared statement to avoid SQL injection
    $stmt = $conn->prepare("DELETE FROM admin WHERE id = ?");
    $stmt->bind_param("i", $id); // Assuming 'id' is an integer, use "i" as the type

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Usuario Eliminado con éxito';
    } else {
        $_SESSION['error'] = $conn->error;
    }

    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione el elemento para eliminar primero';
}

header('location: usuarios.php');

?>