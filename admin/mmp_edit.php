<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $edit_fechaHechos = $_POST['edit_fechaHechos'];   
    $lugarHechos = $_POST['lugarHechos']; // Corregir aquí
    $articulo = $_POST['articulo'];    
    $numeral = $_POST['numeral'];
    
    
    // Use prepared statement to update the record
    $stmt = $conn->prepare("UPDATE mmpPonal SET edit_fechaHechos = ?, lugarHechos = ?, numeral = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $edit_fechaHechos, $lugarHechos, $articulo, $numeral ,$id,);
    

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Información Mmp actualizada con éxito';
    } else {
        $_SESSION['error'] = 'Error al actualizar la información mmp: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    $_SESSION['error'] = 'Seleccione la formación para editar primero';
}

header('location: mmp.php');
?>
