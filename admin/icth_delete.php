<?php
include 'includes/session.php';

if(isset($_POST['delete']) && isset($_POST['id'])){
    $id = $_POST['id'];
    echo 'ID a eliminar:', $id; // Agregar un console log
    // Resto del código para crear la conexión y ejecutar la consulta de eliminación
    // ...
    
    $sql = "DELETE FROM icth WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if($stmt->execute()){
        $_SESSION['success'] = 'ICTH eliminado con éxito';
    } else {
        $_SESSION['error'] = 'Error al eliminar el ICTH: ' . $conn->error;
    }
} else {
    $_SESSION['error'] = 'Seleccione el ICTH para eliminar primero';
}

header('Location: icth.php');
?>
