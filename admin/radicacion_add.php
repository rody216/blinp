<?php
include 'includes/session.php';

if(isset($_POST['add'])){
    $numeroRadicacion = $_POST['numeroRadicacion'];
    $delitos = $_POST['delitos'];
    $penaPrivativaAnos = $_POST['penaPrivativaAnos'];
    $penaPrivativaMeses = $_POST['penaPrivativaMeses'];
    $penaPrivativaDias = $_POST['penaPrivativaDias'];
    $sitioreclusion = $_POST['sitioreclusion'];
    $Ciudad = $_POST['Ciudad'];
    $fecha = $_POST['fecha'];

    // Assuming you have a valid database connection in $conn
    include '../conn.php';

    // Prepare the SQL statement using prepared statements
    $stmt = $conn->prepare("INSERT INTO ramaJudicialRadicacion (numeroRadicacion, delitos, penaPrivativaAnos, penaPrivativaMeses, penaPrivativaDias, sitioreclusion, Ciudad. fecha) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die('Error in SQL query: ' . $conn->error);
    }
    
    $stmt->bind_param("ssssssss",  $numeroRadicacion, $delitos, $penaPrivativaAnos, $penaPrivativaMeses, $penaPrivativaDia, $sitioreclusion, $Ciudad, $fecha);

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
