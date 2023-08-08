<?php
include 'includes/session.php';

if(isset($_POST['edit'])){
    $certificado = $_POST['certificado'];
    $hora = $_POST['hora'];
    $resultado = $_POST['resultado'];
    $siri = $_POST['siri'];
    $sancion = $_POST['sancion'];
    $providencia = $_POST['providencia'];
    $filename = $_FILES['documento']['name'];

    // Assuming you have a valid database connection in $conn
    include '../conn.php';

    // Prepare the SQL statement using prepared statements
    $stmt = $conn->prepare("INSERT INTO spoa (certificado, hora, resultado, siri, sancion, providencia, documento) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Bind the parameters to avoid SQL injection
    $stmt->bind_param("sssssss", $certificado, $hora, $resultado, $siri, $sancion, $providencia, $filename);

    if (!empty($filename)) {
        // Move the uploaded file to the desired location
        move_uploaded_file($_FILES['documento']['tmp_name'], '../archive/' . $filename);
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

header('location: spoa.php');
?>
