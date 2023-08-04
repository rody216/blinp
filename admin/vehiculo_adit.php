<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $tipo_Vehiculo = $_POST['tipo_Vehiculo'];   
    $placas = $_POST['placas']; // Corregir aquí
    $modelo = $_POST['modelo'];    
    $marca = $_POST['marca'];
    $linea = $_POST['linea'];
    $secretaria_Transito = $_POST['secretaria_Transito'];
    $documento = $_POST['documento'];
    // Use prepared statement to update the record
    $stmt = $conn->prepare("UPDATE vehiculos SET tipo_Vehiculo = ?, placas = ?, modelo = ?, marca = ?, linea = ?, secretaria_Transito = ?, documento = ? WHERE id = ?");
    $stmt->bind_param("sssssssi", $tipo_Vehiculo, $placas, $modelo, $marca, $linea, $secretaria_Transito, $documento, $id);
    

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Información vehiuclar actualizada con éxito';
    } else {
        $_SESSION['error'] = 'Error al actualizar la información vehicular: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione la formación para editar primero';
}

header('location: vehiuclos.php');
?>
