<?php
    include 'includes/session.php';

    if (isset($_POST['add'])) {
        $entidad = $_POST['entidad'];
        $tipoProducto = $_POST['tipoProducto'];
        $numeroProducto = $_POST['numeroProducto'];

        //creating employeeid
        $letters = '';
        $numbers = '';
        foreach (range('A', 'Z') as $char) {
            $letters .= $char;
        }
        for ($i = 0; $i < 10; $i++) {
            $numbers .= $i;
        }
        $employee_id = substr(str_shuffle($letters), 0, 3) . substr(str_shuffle($numbers), 0, 9);
        //

        // Assuming $conn is the database connection variable
        // Make sure you have established the connection before this point

        $sql = "INSERT INTO bancarios (entidad, tipoProducto, address, numeroProducto, created_on) VALUES ('$entidad', '$tipoProducto', '$address', '$numeroProducto', NOW())";
        if ($conn->query($sql)) {
            $_SESSION['success'] = 'Datos bancarios añadidos correctamente';
        } else {
            $_SESSION['error'] = 'Error al agregar datos bancarios: ' . $conn->error;
        }
    } else {
        $_SESSION['error'] = 'Llenar el formulario de agregar primero';
    }

    header('location: finanzas.php');
?>
