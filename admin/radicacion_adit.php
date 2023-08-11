<?php
    include 'includes/session.php';

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $numeroRadicacion = $_POST['numeroRadicacion'];
        $delitos = $_POST['delitos'];
        $penaPrivativaAnos = $_POST['penaPrivativaAnos'];
        $penaPrivativaMeses = $_POST['penaPrivativaMeses'];
        $penaPrivativaDias = $_POST['penaPrivativaDias'];
        $sitioreclusion = $_POST['sitioreclusion'];
        $Ciudad = $_POST['Ciudad'];
        $fecha = $_POST['fecha'];
    
        $sql = "UPDATE ramaJudicialRadicacion  SET numeroRadicacion = '$numeroRadicacion', delitos = '$delitos', penaPrivativaAnos = '$penaPrivativaAnos', penaPrivativaMeses  = '$penaPrivativaMeses', penaPrivativaDias  = '$penaPrivativaDias', sitioreclusion  = '$sitioreclusion', Ciudad  = '$Ciudad', fecha  = '$fecha', WHERE id = '$id'";
        if ($conn->query($sql)) {
            $_SESSION['success'] = 'Información Judicial Radicacion actualizada con éxito';
        } else {
            $_SESSION['error'] = 'Error al actualizar la información Judicial: ' . $conn->error;
        }

    } else {
        $_SESSION['error'] = 'Seleccionar datos para editar primero';
    }

    header('location: judicial_radicacion.php');
