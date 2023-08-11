<?php
include 'includes/session.php';

if(isset($_POST['add'])){
    $expediente = $_POST['expediente'];
    $fechaHechos = $_POST['fechaHechos'];
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $municipio = $_POST['municipio'];
    $articulo = $_POST['articulo'];

    // Assuming you have a valid database connection in $conn
    include '../conn.php';

    // Prepare the SQL statement using prepared statements
    $stmt = $conn->prepare("INSERT INTO rnmcPonal (expediente, fechaHechos, departamento, ciudad, municipio, articulo) VALUES (?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die('Error in SQL query: ' . $conn->error);
    }
    
    $stmt->bind_param("ssssss", $expediente, $fechaHechos, $departamento, $ciudad, $municipio, $articulo);

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

header('location: rnmc.php');
?>
