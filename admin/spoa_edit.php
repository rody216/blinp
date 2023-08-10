<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $noticia = $_POST['noticia'];   
    $calidad = $_POST['calidad']; // Corregir aquí
    $delito = $_POST['delito'];    
    $fechaHechos = $_POST['fechaHechos'];
    $ampliacionHechos = $_POST['ampliacionHechos'];
    $documento = $_POST['documento'];
    // Use prepared statement to update the record
    $stmt = $conn->prepare("UPDATE spoa SET noticia = ?, calidad = ?, delito = ?, fechaHechos = ?, ampliacionHechos = ?, documento = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $noticia, $calidad, $delito, $fechaHechos, $ampliacionHechos, $documento, $id);
    

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Información spoa actualizada con éxito';
    } else {
        $_SESSION['error'] = 'Error al actualizar la información spoa: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione la formación para editar primero';
}

header('location: spoa.php');
?>
