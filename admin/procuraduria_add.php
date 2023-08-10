<?php
include 'includes/session.php';

if(isset($_POST['add'])){
    $certificado = $_POST['certificado'];
    $hora = $_POST['hora'];
    $fecha = $_POST['fecha'];
    $resultado = $_POST['resultado'];
    $siri = $_POST['siri'];
    $sancion = $_POST['sancion'];
    $providencia = $_POST['providencia'];
    $filename = $_FILES['documento']['name'];

    // Assuming you have a valid database connection in $conn
    include '../conn.php';

    // Prepare the SQL statement using prepared statements
    $stmt = $conn->prepare("INSERT INTO procuraduria (certificado, hora, fecha, resultado, siri, sancion, providencia, documento) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind the parameters to avoid SQL injection
    $stmt->bind_param("ssssssss", $certificado, $hora, $fecha, $resultado, $siri, $sancion, $providencia, $filename);

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

header('location: procuraduria.php');
?>
