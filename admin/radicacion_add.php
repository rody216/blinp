<?php
include 'includes/session.php';

if(isset($_POST['add'])){
    $numeroProceso = $_POST['numeroProceso'];
    $fechaRadicacion = $_POST['fechaRadicacion'];
    $tipoProceso = $_POST['tipoProceso'];
    $clase = $_POST['clase'];
    $estatus = $_POST['estatus'];
    $filename = $_FILES['pdf']['name'];

    // Assuming you have a valid database connection in $conn
    include '../conn.php';

    // Prepare the SQL statement using prepared statements
    $stmt = $conn->prepare("INSERT INTO ramaJudicialRadicacion (numeroProceso, fechaRadicacion, tipoProceso, clase, estatus, pdf) VALUES (?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die('Error in SQL query: ' . $conn->error);
    }
    
    $stmt->bind_param("ssssss", $numeroProceso, $fechaRadicacion, $tipoProceso, $clase, $estatus, $filename);

    if (!empty($filename)) {
        // Move the uploaded file to the desired location
        move_uploaded_file($_FILES['pdf']['tmp_name'], '../archive/' . $filename);
    }

    if($stmt->execute()){
        $_SESSION['success'] = 'Datos añadidos satisfactoriamente';
    } else{
        $_SESSION['error'] = 'Error al insertar los datos: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else{
    $_SESSION['error'] = 'Completa el formulario';
}

header('location: judicial_radicacion.php');
?>
