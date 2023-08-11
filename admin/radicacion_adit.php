<?php
    include 'includes/session.php';

    if (isset($_POST['edit'])) {
        $empid = $_POST['id'];
        $entidad = $_POST['entidad'];
        $tipoProducto = $_POST['tipoProducto'];
        $numeroProducto = $_POST['numeroProducto'];
    
        $sql = "UPDATE ramaJudicialRadicacion  SET entidad = '$entidad', tipoProducto = '$tipoProducto', numeroProducto = '$numeroProducto' WHERE id = '$empid'";
        if ($conn->query($sql)) {
            $_SESSION['success'] = 'Información Judicial Radicacion actualizada con éxito';
        } else {
            $_SESSION['error'] = 'Error al actualizar la información Judicial: ' . $conn->error;
        }

    } else {
        $_SESSION['error'] = 'Seleccionar datos para editar primero';
    }

    header('location: judicial_radicacion.php');
?>
