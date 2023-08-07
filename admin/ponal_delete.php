<?php
include 'includes/session.php';

if(isset($_POST['delete']) && isset($_POST['id'])){
    $id = $_POST['id'];
    echo 'ID a eliminar:', $id; // Agregar un console log
    // Resto del código para crear la conexión y ejecutar la consulta de eliminación
    // ...
    
    $sql = "DELETE FROM antecedentesPonal WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if($stmt->execute()){
        $_SESSION['success'] = 'Datos eliminados con éxito';
    } else {
        $_SESSION['error'] = 'Error al eliminar los datos: ' . $conn->error;
    }
} else {
    $_SESSION['error'] = 'Seleccione para eliminar primero';
}

header('Location: ponal.php');
?>
