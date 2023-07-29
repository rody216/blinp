<?php
    include 'includes/session.php';

    if (isset($_POST['edit'])) {
        $empid = $_POST['id'];
        $entidad = $_POST['entidad'];
        $tipoProducto = $_POST['tipoProducto'];
        $numeroProducto = $_POST['numeroProducto'];
    
        $sql = "UPDATE bancarios SET entidad = '$entidad', tipoProducto = '$tipoProducto', numeroProducto = '$numeroProducto' WHERE id = '$empid'";
        if ($conn->query($sql)) {
            $_SESSION['success'] = 'Información financiera actualizada con éxito';
        } else {
            $_SESSION['error'] = 'Error al actualizar la información financiera: ' . $conn->error;
        }

    } else {
        $_SESSION['error'] = 'Seleccionar finanzas para editar primero';
    }

    header('location: finanzas.php');
?>
