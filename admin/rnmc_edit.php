<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $expediente = $_POST['expediente'];
    $fechaHechos = $_POST['fechaHechos'];
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $municipio = $_POST['municipio'];
    $articulo = $_POST['articulo'];
    // Use prepared statement to update the record
    $stmt = $conn->prepare("UPDATE rnmcPonal SET expediente = ?, fechaHechos = ?, departamento = ?, ciudad = ?, municipio = ?, articulo = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $expediente, $fechaHechos,  $departamento, $ciudad , $municipio, $articulo, $id);
    

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Información judicial Rnmc actualizada con éxito';
    } else {
        $_SESSION['error'] = 'Error al actualizar la información judicial rnmc: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione la formación para editar primero';
}

header('location: rnmc.php');
?>
